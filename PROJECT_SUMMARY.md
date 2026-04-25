# Project Handover: Talisman Web & Deployment System

This document summarizes the current state of the project, architecture, and instructions for future development.

## 1. Project Overview
A modern, glassmorphic management dashboard and website for the Talisman Game Server, featuring a containerized deployment system.

### Repositories
*   **`host_setup` (Local Root)**: The primary deployment repository. Contains the installer, Docker configurations, and server scripts.
*   **`New_Website` (Public/Encoded)**: The repository for public distribution. Contains encrypted PHP files to protect source code.

## 2. Architecture & Docker
The project uses a **Triple-Database Architecture** on a **LAMP Stack** (Linux, Apache, MySQL, PHP).

### Docker Containers
*   **Web Server**: PHP 7.4 + Apache (defined in `Dockerfile`).
*   **Database (MariaDB)**: Segregated into three schemas for performance and security:
    1.  `db_account`: Handles logins, sessions, and account data.
    2.  `db_game`: Handles character data and game-world info.
    3.  `db_misc`: Handles website-specific data (Votes, Shop, Payments).

### Port Mappings
*   **Decoded (Source)**: Port 8082.
*   **Encoded (Distribution)**: Port 8083.

## 3. Security & Sanitization
*   **Leaked Secrets Removed**: A hardcoded Google API key and old "trash" files have been purged.
*   **Single Session Enforcement**: A security feature prevents multiple people from using the same account simultaneously. The latest login automatically invalidates old sessions.
*   **Credentials**: All sensitive database info is stored in **`credentials.env`**. This file is ignored by Git to prevent leaks.
*   **2FA Management**: Administrative controls are implemented to list 2FA-enabled users and forcibly disable 2FA if a player loses access.

## 4. Development Workflow
We have established a **Clean Working Workspace** in the `/working` directory.

### Directory Structure
*   📂 **/working/decoded/**: **WORK HERE.** This contains the readable PHP source code. Never push this folder to a public repository.
*   📂 **/working/encoded/**: **DISTRIBUTION.** This folder is automatically updated with encrypted code for public use.
*   📂 **/working/server_host_package/**: **HOSTING TOOLS.** The master installer and server configuration repo.
*   📄 **/working/build.php**: **THE ENGINE.** Run `php working/build.php` to sync and encrypt your work from `decoded` to `encoded`.

### How to Push to GitHub
1.  **Work** in `working/decoded/`.
2.  **Build** by running `php working/build.php`.
3.  **Deploy** the contents of `working/encoded/` to your public GitHub repo (`New_Website`).

## 5. Key Scripts & Tools
*   **`.installer.sh`**: Automated script to set up the Docker environment on a fresh server.
*   **`decoded/tools/`**: Contains database maintenance scripts, debuggers, and schema migration tools.
*   **`setup.sh`**: Basic environment initialization script.

---
**Maintained by DarkScorpion**
*Support: fb.me/darkscorpiont*
