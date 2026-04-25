# ⚔️ Talisman Online: Ultimate Web Suite

![Talisman Banner](images/banner.png)

## 🌟 Overview
Welcome to the most advanced, secure, and user-friendly web platform for **Talisman Online**. Built for high-performance servers, this suite combines a stunning modern interface with powerful administrative tools.

---

## 🚀 Key Features

*   **💳 GCash Integration**: Full GCash payment support with automated QR code display and proof-of-payment submission.
*   **🛡️ Advanced Security**: Integrated Google 2FA (Two-Factor Authentication) and robust account protection.
*   **🎮 Player Dashboard**: Modern, responsive dashboard for players to manage characters, buy eCoins, and join events.
*   **📦 One-Click Installer**: Master SQL setup that initializes everything—databases, settings, and branding—in seconds.
*   **⚡ Auto-Online Engine**: Optimized for Docker with automatic restart and database self-healing.

---

## 🛠️ Noob-Friendly Installation (3 Steps)

Setting up your website has never been easier! Just follow these simple steps:

### 1️⃣ Prepare your Database
Create three empty databases on your MySQL server:
*   `db_account`
*   `db_game`
*   `db_misc`

### 2️⃣ Import the Master Setup
Navigate to the `/install` folder in this repository and import **`talisman_master_setup.sql`** into your databases. This will automatically create all tables and apply the default server settings.

### 3️⃣ Configure & Go
Open `include/db_config.php` and enter your database credentials. 
Upload the files to your web server (PHP 7.4+ recommended), and you are **ONLINE!**

---

## 🔑 Website Activation
**This website requires a unique activation key to function.** 

To get your activation key and unlock all premium features, please contact me directly on Facebook:

### [👉 Click Here to Activate via Messenger](https://fb.me/datkscorpiont)
**Username:** `datkscorpiont`

---

## 📸 Screenshots
*Check out the modern look of your new server!*

<div align="center">
  <img src="css/image/logo.png" width="200" alt="Logo">
</div>

---

## ⚠️ Requirements
*   **PHP**: 7.4 or higher
*   **Database**: MySQL 5.7+ / MariaDB
*   **Extensions**: PDO, OpenSSL, CURL

---

**Developed with ❤️ for the Talisman Online Community.**
*For support or custom development, reach out via the Facebook link above.*
