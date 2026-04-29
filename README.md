# ⚔️ Talisman Online: Ultimate Web Suite (v1.6.8)

![Talisman Banner](images/banner.png)

## 🌟 Overview
Welcome to the most advanced, secure, and user-friendly web platform for **Talisman Online**. This suite is designed for high-performance servers, combining a stunning modern interface with a simplified, maintenance-free update pipeline.

---

## 🚀 Key Features

*   **⚡ Ultra-Fast Updates**: New "Download & Overwrite" system bypasses complex hashing, ensuring 100% reliable updates directly from GitHub.
*   **💳 GCash Integration**: Full GCash payment support with automated QR display and proof-of-payment submission.
*   **🛡️ Advanced Security**: Integrated Google 2FA (Two-Factor Authentication) and restricted folder access.
*   **🎮 Player Dashboard**: Modern, responsive dashboard for players to manage characters, buy eCoins, and join events.
*   **📦 One-Click Auto-Installer**: Setup everything—databases, settings, and branding—in seconds via the web browser.

---

## 🛠️ Quick Installation Guide

Setting up your website is simple! Follow these steps:

### 1️⃣ Database Preparation
1.  Open **`include/db_config.php`**.
2.  Enter your MySQL **Host**, **Username**, and **Password**.
3.  Ensure your MySQL user has permissions to create databases.

### 2️⃣ Run the Web Installer
Navigate to:
`http://your-domain.com/install/index.php`

The installer will:
*   Verify your database connectivity.
*   Automatically create `db_account`, `db_game`, and `db_misc` if they don't exist.
*   Import the latest master SQL schema.
*   Configure basic branding.

### 3️⃣ Security Cleanup
**IMPORTANT:** Once the installation is successful, immediately **delete the `/install` folder** to prevent unauthorized access.

---

## 👨‍💻 Developer Guide (Maintenance)

If you are modifying the website files locally, use the provided pipeline to push updates to your clients:

1.  **Edit Files**: Make your changes in the `decoded/` directory.
2.  **Increment Version**: Update the version number in `decoded/version.json`.
3.  **Run Build**: Execute `php build.php` from the root directory.
    *   This will automatically encrypt your files into the `encoded/` directory.
    *   It will generate fresh file manifests.
    *   It will push the changes to both the Website and Installer repositories on GitHub.

---

## 🔑 Website Activation
**This website requires a unique activation key linked to your domain.**

To get your activation key and unlock all premium features, please contact me directly:

### [👉 Click Here to Activate via Messenger](https://fb.me/darkscorpiont)
**Username:** `darkscorpiont`

---

## 📸 Requirements
*   **PHP**: 7.4 or higher
*   **Database**: MySQL 5.7+ / MariaDB
*   **Web Server**: Apache (with mod_rewrite) or Nginx
*   **Extensions**: PDO, OpenSSL, CURL

---

**Developed with ❤️ for the Talisman Online Community.**
*For support or custom development, reach out via the Facebook link above.*
