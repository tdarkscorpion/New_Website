# Talisman Website - Progress Report
> **Last Updated:** 2026-04-17  
> **Purpose:** Any AI agent can read this file before continuing work on this project.

---

## 🏗️ Project Overview

This is a PHP-based game server management website for a game called "Talisman" (appears to be a Rappelz-style MMO). It has:
- A public-facing homepage (`index.php`) with modals for login/register, ranking, buy eCoins, and a player dashboard.
- An admin panel embedded in the dashboard (tab-based, glassmorphic UI).
- A legacy panel (`legacy_panel.php`) that loads action sub-pages inside an iframe within the dashboard.

**Server:** PHP built-in server (`php -S localhost:8082`) from `f:\for talisman\new where we need functions\`  
**Database:** MariaDB/MySQL via Docker container named `db`, accessed at `localhost:8083` (Adminer).  
**DBs:** `db_account` (player accounts), `db_game` (characters), `db_misc` (website settings, donations, etc.)

---

## 📁 Key Files & Their Purpose

| File | Purpose |
|------|---------|
| `index.php` | Main homepage, includes all modals |
| `dashboard.php` | Player dashboard (modal), loaded into index.php |
| `legacy_panel.php` | Legacy admin panel, loaded in iframe inside AdminPanel tab |
| `buy-ecoins.php` | Modal for purchasing eCoins (GCash manual + PayPal) |
| `Actions/submit-donation.php` | Handles manual GCash donation form submission (multipart, saves screenshot) |
| `Actions/donations-manager.php` | Admin view: lists pending donations, approve/decline with AJAX |
| `Actions/paypal-webhook.php` | Receives PayPal webhook, credits points automatically |
| `Actions/paypal-settings.php` | Admin form: configure PayPal API keys |
| `Actions/gcash-settings.php` | Admin form: configure GCash API keys (for future PayMongo/Xendit integration) |
| `Actions/system-settings.php` | Admin: site branding, download links, GCash manual details, feature toggles |
| `Functions/Accounts-Characters.php` | Core account functions |
| `Functions/Settings.php` | `GetSettingValue()`, `SetSettingValue()`, `GetWebsiteOption()`, `SetWebsiteOption()` |
| `Functions/Permissions.php` | `Permissions` class + `$permissions` instance. Does NOT define `IsAdministrator()` |
| `include/config.php` | Connects to DB, requires all Functions files |
| `include/action_login.php` | AJAX login handler - sets `$_SESSION['pv']`, `$_SESSION['logged']`, etc. |

---

## ✅ Completed Features

1. **Player Dashboard** — Glassmorphic tabbed interface with: Overview, Security, Donation Tracking, Characters, Rewards, Admin Tools tabs.
2. **Manual GCash Donation Form** — Player selects package → form collects sender name, mobile, transaction ID, screenshot → POST to `submit-donation.php`.
3. **Admin Donation Manager** — Pending list with approve/decline AJAX modals. History table with admin name, reason, proof image popup. Duplicate TXN ID detection. Risk analysis (linked accounts by mobile).
4. **Admin Notification Badge** — Pending donation count shown as red badge on Admin Tools nav button.
5. **Player Donation Tracking Tab** — Shows player's own donation history with status and decline reasons.
6. **PayPal Webhook Handler** — `Actions/paypal-webhook.php` receives PAYMENT.CAPTURE.COMPLETED events and credits points from `custom_id` field (format: `ACCOUNTID|POINTS`).
7. **Database Tables Required:**
   - `db_misc.t_donations` (id, account_id, amount, credited_points, sender_name, sender_mobile, transaction_id, screenshot_path, status, decline_reason, processed_at, processed_by, created_at)
   - `db_misc.t_website_options` (option_name VARCHAR PRIMARY KEY, option_value TEXT)
   - `db_misc.t_settings` (existing, has gcash_number, gcash_name, gcash_qr_url, paypal_client_id, paypal_secret, paypal_mode, paypal_webhook_id, paypal_webhook_url)
8. **GCash Number/Name display** in buy-ecoins modal when player selects a GCash package.
9. **Feature Toggle Checkboxes** in system-settings.php for `gcash_enabled` and `paypal_enabled`.

---

## ❌ Known Issues & Bugs (Pending Fix)

### 🔴 CRITICAL: `IsAdministrator()` and `IsGameMaster()` are NOT defined as functions
- These functions are called throughout `dashboard.php`, `donations-manager.php`, `system-settings.php`, `legacy_panel.php`, etc.
- They do NOT exist anywhere in the codebase.
- **Fix needed:** Add these functions to `Functions/Accounts-Characters.php` (or a new file included by config.php):
  ```php
  function IsAdministrator() {
      return isset($_SESSION['pv']) && (int)$_SESSION['pv'] >= 9;
  }
  function IsGameMaster() {
      return isset($_SESSION['pv']) && (int)$_SESSION['pv'] >= 5 && (int)$_SESSION['pv'] < 9;
  }
  ```
  PV levels (from PvToStr function):
  - 0 = Regular player
  - 1 = Donator
  - 2-3 = MOD
  - 5-7 = GM  
  - 8 = GM (special)
  - 9+ = Administrator

### 🔴 Dashboard doesn't open for pv=0 users
- Caused by `IsAdministrator()` fatal error crashing the page when `dashboard.php` is included.
- Fix: Add `IsAdministrator()` and `IsGameMaster()` functions.

### 🟡 `t_website_options` table may not exist
- `GetWebsiteOption()` and `SetWebsiteOption()` in Settings.php reference `t_website_options`.
- If table doesn't exist, feature toggles in system-settings.php will fail.
- **Fix:** Run SQL: `CREATE TABLE IF NOT EXISTS t_website_options (option_name VARCHAR(100) NOT NULL PRIMARY KEY, option_value TEXT);`

### 🟡 GCash API fields in gcash-settings.php are for PayMongo/Xendit (not manual GCash)
- The admin currently uses manual GCash (collect details, verify, approve). 
- PayMongo/Xendit integration is a FUTURE task - not implemented yet.
- Current GCash webhook URL field is not functional (no handler exists).

### 🟡 `submit-donation.php` needs the uploads/donations/ directory to exist
- Check that `f:\for talisman\new where we need functions\uploads\donations\` exists and is writable.

### 🟡 `dashboard.php` pv=0 users: Admin-only queries crash if `IsAdministrator()` doesn't exist
- Line 25 in dashboard.php: `if (IsAdministrator() || IsGameMaster()) { ... }` — will fatal error.

---

## 🔗 PayPal Webhook Setup Instructions

### What URL to put in PayPal Developer Dashboard:
```
https://YOUR_DOMAIN/Actions/paypal-webhook.php
```
Example: `https://talisman.example.com/Actions/paypal-webhook.php`

For local testing, use ngrok: `ngrok http 8082` then use the ngrok URL.

### How it works:
1. Player selects PayPal package on the website.
2. During PayPal checkout, the `custom_id` field must be set to `ACCOUNTID|POINTS` (e.g., `42|500`).
3. After payment, PayPal sends a webhook to the URL above.
4. `paypal-webhook.php` parses the `custom_id`, credits the points, and logs the transaction.

### PayPal Admin Settings (in Admin Panel → Payment Settings → PayPal):
- **Client ID:** Your PayPal app client ID
- **Secret:** Your PayPal app secret
- **Mode:** `sandbox` (for testing) or `live` (for production)
- **Webhook ID:** The Webhook ID from PayPal Developer Dashboard (for signature verification)
- **Webhook URL:** `https://YOUR_DOMAIN/Actions/paypal-webhook.php` (just for reference display)

---

## 🔗 GCash Setup Instructions (Manual/Current System)

GCash currently works as a **manual payment system**:
1. Admin sets their GCash number and name in Admin Panel → Settings → GCash Manual Details
2. Players see this info when they click "Select Package" on a GCash package
3. Player sends money via GCash app manually, then fills the form with proof
4. Admin reviews, approves/declines from the Donation Manager

**For automated GCash** (future): Use PayMongo or Xendit. The admin panel has fields for their API keys.

---

## 🏗️ Remaining Tasks

- [ ] **CRITICAL:** Define `IsAdministrator()` and `IsGameMaster()` functions in `Functions/Accounts-Characters.php`
- [ ] **CRITICAL:** Ensure `t_website_options` table exists in `db_misc`
- [ ] **Fix:** Verify `uploads/donations/` directory exists and is writable
- [ ] **Feature:** "Website Options" panel (hide/show dashboard tabs per admin preference) - table `t_dashboard_options` needed
- [ ] **Feature:** PayPal checkout frontend (pass `custom_id = accountid|points` to PayPal SDK)
- [ ] **Feature:** Automated GCash via PayMongo/Xendit (webhook handler needed)
- [ ] **Bug:** Dashboard completely broken for all logged-in users due to missing `IsAdministrator()` function
- [ ] **Verify:** `system-settings.php` GCash/PayPal enable toggles actually read/write `t_website_options` correctly

---

## ⚙️ PV (Permission Level) System

| PV Value | Role |
|----------|------|
| 0 | Regular Player |
| 1 | Donator |
| 2-3 | MOD |
| 5-7 | GM |
| 8 | Senior GM |
| 9+ | Administrator |

Functions to use:
```php
IsAdministrator() // pv >= 9
IsGameMaster()    // pv >= 5 (includes admins in many legacy checks)
```

---

## 🗄️ Database Quick Reference

```sql
-- Check if tables exist
SHOW TABLES IN db_misc;

-- Create t_website_options if missing
CREATE TABLE IF NOT EXISTS `db_misc`.`t_website_options` (
    `option_name` VARCHAR(100) NOT NULL,
    `option_value` TEXT,
    PRIMARY KEY (`option_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Seed default options
INSERT IGNORE INTO `db_misc`.`t_website_options` (option_name, option_value) VALUES
('gcash_enabled', '1'),
('paypal_enabled', '0');

-- Check t_donations schema
DESCRIBE db_misc.t_donations;
```
