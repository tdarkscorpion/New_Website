// script.js - Updated for Talisman Management Panel
function safeString(input) {
    var div = document.createElement('div');
    div.textContent = input;
    return div.innerHTML;
}

function toggleMobileMenu() {
    const mainMenu = document.getElementById("mainMenu");
    if (mainMenu) {
        mainMenu.classList.toggle("mobile-active");
    }
}

function closeMobileMenu() {
    const mainMenu = document.getElementById("mainMenu");
    if (mainMenu) {
        mainMenu.classList.remove("mobile-active");
    }
}

function toggleSidebar() {
    const sidebar = document.getElementById("dashboardSidebar");
    const overlay = document.getElementById("sidebarOverlay");
    if (sidebar) sidebar.classList.toggle("mobile-open");
    if (overlay) overlay.classList.toggle("active");
}

document.addEventListener('DOMContentLoaded', function() {
    // Typed.js
    if (document.querySelector(".typer")) {
        var strings = [
            window.TalismanConfig ? window.TalismanConfig.typerLine1 : "Warriors of World",
            window.TalismanConfig ? window.TalismanConfig.typerLine2 : "Classic Server",
            window.TalismanConfig ? window.TalismanConfig.typerLine3 : "Max Level 40",
            window.TalismanConfig ? window.TalismanConfig.typerLine4 : "Max Combine +10"
        ];
        new Typed(".typer", {
            strings: strings,
            typeSpeed: 100,
            backSpeed: 50,
            loop: true,
        });
    }

    // Modal Toggle Logic
    const loginBtn = document.getElementById("login");
    const registerBtnModal = document.getElementById("register");
    const container = document.getElementById('container');

    if (loginBtn && registerBtnModal && container) {
        registerBtnModal.addEventListener("click", () => container.classList.add("active"));
        loginBtn.addEventListener("click", () => container.classList.remove("active"));
    }
});

function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) modal.style.display = "block";
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) modal.style.display = "none";
}

// Tab Switching Logic for Dashboard
function openTab(evt, tabName) {
    var i, tabcontent, navbtns;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    
    // In dashboard it uses nav-btn instead of tablinks
    navbtns = document.getElementsByClassName("nav-btn");
    for (i = 0; i < navbtns.length; i++) {
        navbtns[i].classList.remove("active");
    }
    
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");

    // Close the mobile sidebar if it's open
    var sidebar = document.getElementById("dashboardSidebar");
    if (sidebar && sidebar.classList.contains("mobile-open")) {
        sidebar.classList.remove("mobile-open");
    }
}

// Action Handler for Dashboard
function handleAction(action) {
    let formData = "";
    let targetUrl = "include/action_panel.php";
    
    if (action === 'change_password') {
        formData = $("#changePasswordForm").serialize() + "&action=" + action;
        $("#cp_res").html("Processing...");
    } else if (action === 'claim_code') {
        formData = "code=" + $("#giftCode").val() + "&action=" + action;
    }

    $.ajax({
        type: "POST",
        url: targetUrl,
        data: formData,
        success: function(res) {
            if (action === 'change_password') $("#cp_res").html(res);
            else alert(res);
        },
        error: function() {
            alert("Connection error.");
        }
    });
}

$(document).ready(function() {
    // Registration
    $(document).on('click', "#register1", function(e) {
        e.preventDefault();
        var btn = this;
        $(btn).text('Registering...').prop('disabled', true);
        $.ajax({
            type: "POST",
            url: "include/action_register.php",
            data: $("#registrationForm").serialize(),
            success: function(res) {
                $("#responseMessage").html(res);
                if (res.toLowerCase().includes("successful")) {
                    $("#registrationForm")[0].reset();
                    refreshCaptcha();
                } else if (res.toLowerCase().includes("captcha")) {
                    // Auto-refresh image on wrong CAPTCHA
                    refreshCaptcha();
                }
            },
            error: function() {
                $("#responseMessage").html("<span style='color:#f87171;'>Connection error. Please try again.</span>");
            },
            complete: function() {
                $(btn).text('Register').prop('disabled', false);
            }
        });
    });

    // Login
    $(document).on('click', "#login1", function(e) {
        e.preventDefault();
        console.log("Login attempt initiated...");
        $.ajax({
            type: "POST",
            url: "include/action_login.php",
            data: $("#loginForm").serialize(),
            success: function(res) {
                if (res.includes("2fa_required")) {
                    $("#2fa-login-container").show();
                    $("#loginResponseMessage").html("<span style='color:#fcc419;'>2FA Verification Required. Please enter your code.</span>");
                    $("#login2faCode").focus();
                } else if (res.includes("successful")) {
                    window.location.reload();
                } else {
                    $("#loginResponseMessage").html(res);
                }
            },
            error: function() {
                $("#loginResponseMessage").html("Error connecting to server.");
            }
        });
    });
});
