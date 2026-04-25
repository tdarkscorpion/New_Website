# Talisman Website - Production Source

This repository contains the **Decoded Source** for the Talisman Website. It follows a modular architecture designed for high performance and premium aesthetics.

## 🏗️ Project Structure

- **`decoded/`**: The human-readable source code. **Only work in this directory.**
- **`encoded/`**: The distribution-ready build. Automatically generated via `build.php`.
- **`build.php`**: The build engine that obfuscates and prepares the code for distribution.

## 🚀 Getting Started

### 1. Requirements
- **PHP 7.4+**
- **Docker & Docker Compose**
- **MySQL/MariaDB** (Triple-Database: `db_account`, `db_game`, `db_misc`)

### 2. Installation
1. Ensure your Docker containers are running (`docker-compose up -d`).
2. Run the **System Diagnostics** to verify everything:
   - URL: `http://localhost:8082/setup_diagnostics.php`
3. Use the **Admin Dashboard** to configure your branding and payment gateways.

## 🛠️ Management Tools

| Tool | Purpose |
|------|---------|
| `setup_diagnostics.php` | **Health Check**: Verifies DB connections, tables, and folders. |
| `fix_db.php` | **Schema Patcher**: Updates your database for new features (like Single Session). |
| `build.php` | **Distribution**: Encodes the source for the public `encoded/` repository. |

## ⚙️ PV (Permission Level) System

The website uses a `pv` (Permission Value) system for security:
- **0**: Regular Player
- **1**: Donator
- **2-3**: Moderator
- **5-7**: Game Master (GM)
- **9+**: Administrator

---
*Maintained by the Talisman Development Team.*
