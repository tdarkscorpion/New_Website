/**
 * Fast Client-Side DDS Texture Decoder (DXT1, DXT3, DXT5, RGBA)
 * Decodes DirectDraw Surface (.dds) game icons live inside web browsers
 */

(function() {
    function decodeDXT1(width, height, data) {
        const rgba = new Uint8Array(width * height * 4);
        let offset = 128; // Skip 128-byte DDS header
        const blocksX = Math.ceil(width / 4);
        const blocksY = Math.ceil(height / 4);

        for (let by = 0; by < blocksY; by++) {
            for (let bx = 0; bx < blocksX; bx++) {
                if (offset + 8 > data.byteLength) break;
                const c0 = data.getUint16(offset, true);
                const c1 = data.getUint16(offset + 2, true);
                const bits = data.getUint32(offset + 4, true);
                offset += 8;

                const r0 = ((c0 >> 11) & 0x1f) * 255 / 31;
                const g0 = ((c0 >> 5) & 0x3f) * 255 / 63;
                const b0 = (c0 & 0x1f) * 255 / 31;

                const r1 = ((c1 >> 11) & 0x1f) * 255 / 31;
                const g1 = ((c1 >> 5) & 0x3f) * 255 / 63;
                const b1 = (c1 & 0x1f) * 255 / 31;

                const colors = [
                    [r0, g0, b0, 255],
                    [r1, g1, b1, 255],
                    c0 > c1 ? [(2 * r0 + r1) / 3, (2 * g0 + g1) / 3, (2 * b0 + b1) / 3, 255] : [(r0 + r1) / 2, (g0 + g1) / 2, (b0 + b1) / 2, 255],
                    c0 > c1 ? [(r0 + 2 * r1) / 3, (g0 + 2 * g1) / 3, (b0 + 2 * b1) / 3, 255] : [0, 0, 0, 0]
                ];

                for (let py = 0; py < 4; py++) {
                    for (let px = 0; px < 4; px++) {
                        const x = bx * 4 + px;
                        const y = by * 4 + py;
                        if (x < width && y < height) {
                            const idx = (py * 4 + px) * 2;
                            const colorIdx = (bits >> idx) & 0x03;
                            const col = colors[colorIdx];
                            const pixelIdx = (y * width + x) * 4;
                            rgba[pixelIdx] = col[0];
                            rgba[pixelIdx + 1] = col[1];
                            rgba[pixelIdx + 2] = col[2];
                            rgba[pixelIdx + 3] = col[3];
                        }
                    }
                }
            }
        }
        return rgba;
    }

    function decodeDXT5(width, height, data) {
        const rgba = new Uint8Array(width * height * 4);
        let offset = 128;
        const blocksX = Math.ceil(width / 4);
        const blocksY = Math.ceil(height / 4);

        for (let by = 0; by < blocksY; by++) {
            for (let bx = 0; bx < blocksX; bx++) {
                if (offset + 16 > data.byteLength) break;
                
                // Alpha block
                const a0 = data.getUint8(offset);
                const a1 = data.getUint8(offset + 1);
                const aBits0 = data.getUint16(offset + 2, true);
                const aBits1 = data.getUint32(offset + 4, true);
                const aBits = BigInt(aBits0) | (BigInt(aBits1) << 16n);
                offset += 8;

                const alphas = [a0, a1];
                if (a0 > a1) {
                    for (let i = 1; i <= 6; i++) alphas.push(((7 - i) * a0 + i * a1) / 7);
                } else {
                    for (let i = 1; i <= 4; i++) alphas.push(((5 - i) * a0 + i * a1) / 5);
                    alphas.push(0, 255);
                }

                // Color block
                const c0 = data.getUint16(offset, true);
                const c1 = data.getUint16(offset + 2, true);
                const bits = data.getUint32(offset + 4, true);
                offset += 8;

                const r0 = ((c0 >> 11) & 0x1f) * 255 / 31;
                const g0 = ((c0 >> 5) & 0x3f) * 255 / 63;
                const b0 = (c0 & 0x1f) * 255 / 31;

                const r1 = ((c1 >> 11) & 0x1f) * 255 / 31;
                const g1 = ((c1 >> 5) & 0x3f) * 255 / 63;
                const b1 = (c1 & 0x1f) * 255 / 31;

                const colors = [
                    [r0, g0, b0],
                    [r1, g1, b1],
                    [(2 * r0 + r1) / 3, (2 * g0 + g1) / 3, (2 * b0 + b1) / 3],
                    [(r0 + 2 * r1) / 3, (g0 + 2 * g1) / 3, (b0 + 2 * b1) / 3]
                ];

                for (let py = 0; py < 4; py++) {
                    for (let px = 0; px < 4; px++) {
                        const x = bx * 4 + px;
                        const y = by * 4 + py;
                        if (x < width && y < height) {
                            const subIdx = py * 4 + px;
                            const colorIdx = (bits >> (subIdx * 2)) & 0x03;
                            const alphaIdx = Number((aBits >> BigInt(subIdx * 3)) & 7n);

                            const col = colors[colorIdx];
                            const alpha = alphas[alphaIdx] !== undefined ? alphas[alphaIdx] : 255;

                            const pixelIdx = (y * width + x) * 4;
                            rgba[pixelIdx] = col[0];
                            rgba[pixelIdx + 1] = col[1];
                            rgba[pixelIdx + 2] = col[2];
                            rgba[pixelIdx + 3] = alpha;
                        }
                    }
                }
            }
        }
        return rgba;
    }

    async function renderDdsElement(el) {
        const url = el.getAttribute('data-dds-src') || el.src;
        if (!url) return;

        try {
            const resp = await fetch(url);
            if (!resp.ok) return;
            const buffer = await resp.arrayBuffer();
            const data = new DataView(buffer);

            // Check DDS magic string
            const magic = String.fromCharCode(data.getUint8(0), data.getUint8(1), data.getUint8(2), data.getUint8(3));
            if (magic !== 'DDS ') return;

            const height = data.getUint32(12, true);
            const width = data.getUint32(16, true);
            const fourCCInt = data.getUint32(84, true);
            const fourCC = String.fromCharCode(
                fourCCInt & 0xff,
                (fourCCInt >> 8) & 0xff,
                (fourCCInt >> 16) & 0xff,
                (fourCCInt >> 24) & 0xff
            );

            let rgbaData = null;
            if (fourCC === 'DXT1') {
                rgbaData = decodeDXT1(width, height, data);
            } else if (fourCC === 'DXT5' || fourCC === 'DXT3') {
                rgbaData = decodeDXT5(width, height, data);
            }

            if (!rgbaData) return;

            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;
            const ctx = canvas.getContext('2d');
            const imgData = ctx.createImageData(width, height);
            imgData.data.set(rgbaData);
            ctx.putImageData(imgData, 0, 0);

            if (el.tagName.toLowerCase() === 'img') {
                el.src = canvas.toDataURL('image/png');
            } else if (el.tagName.toLowerCase() === 'canvas') {
                el.width = width;
                el.height = height;
                const eCtx = el.getContext('2d');
                eCtx.putImageData(imgData, 0, 0);
            } else {
                el.style.backgroundImage = `url(${canvas.toDataURL('image/png')})`;
                el.style.backgroundSize = 'cover';
            }
        } catch (e) {
            console.error('DDS render error:', e);
        }
    }

    function initDdsAutoRenderer() {
        document.querySelectorAll('[data-dds-src]').forEach(renderDdsElement);
    }

    // Run immediately on script load (synchronous inline scripts fire after DOM is ready)
    initDdsAutoRenderer();

    // Also run on DOMContentLoaded in case script is in <head>
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDdsAutoRenderer);
    }

    // Safety net: re-scan after full page load (images, iframes settled)
    window.addEventListener('load', function() {
        setTimeout(initDdsAutoRenderer, 100);
    });

    // Watch for dynamically injected canvases (e.g. PHP-rendered content inside iframes)
    if (window.MutationObserver) {
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(m) {
                m.addedNodes.forEach(function(node) {
                    if (node.nodeType !== 1) return;
                    // Check the node itself
                    if (node.hasAttribute && node.hasAttribute('data-dds-src')) {
                        renderDdsElement(node);
                    }
                    // Check descendants
                    node.querySelectorAll && node.querySelectorAll('[data-dds-src]').forEach(renderDdsElement);
                });
            });
        });
        observer.observe(document.body || document.documentElement, { childList: true, subtree: true });
    }

    window.renderDdsElement = renderDdsElement;
    window.initDdsAutoRenderer = initDdsAutoRenderer;
})();
