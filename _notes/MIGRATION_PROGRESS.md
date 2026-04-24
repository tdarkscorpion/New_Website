# Migration Progress Tracker — Talisman Panel (New Dashboard)
_Auto-generated on 2026-04-16. Update this file as work progresses._

---

## ⚙️ TOOLING NOTE
**Preferred AI Agent**: Use the offline agent at `f:\for talisman\AI agent\sonetai.py`
```
python "f:\for talisman\AI agent\sonetai.py" "YOUR TASK DESCRIPTION HERE"
```
- Endpoint: http://localhost:11434/api/generate
- Model: deepseek-coder:6.7b (runs on RTX 5060 Ti)
- Use for: generating boilerplate PHP, troubleshooting logic, code suggestions offline

---

## 📋 MIGRATION STATUS

### Legend
- `[x]` Done — visible and functional in new dashboard
- `[~]` Partial — registered but not in sidebar / not visible yet
- `[ ]` Missing — action file exists but not wired to new dashboard

---

## 👤 ACCOUNT MANAGEMENT
| Status | Action Key | File | New Sidebar Link | Notes |
|--------|-----------|------|-----------------|-------|
| [x] | `accounts` | accounts.php | ✅ Accounts DB | |
| [x] | `ChangeUserPass` | change-user-pass.php | ✅ Edit Passwords | |
| [x] | `PlayerPlayedTime` | Time_Played.php | ✅ Player History | |
| [x] | `lockAccount` | lock-account.php | ✅ Imprison | |
| [x] | `LockedAcc` | locked-account.php | ✅ Locked Accounts | |
| [x] | `botpenalty` | botpenalty.php | ✅ Bot Penalty | |
| [ ] | `deleteCharacterByStaff` | delete-character-staff-use.php | ❌ MISSING | Staff delete char — not in sidebar |
| [ ] | `undeleteCharacter` | undelete-character.php | ❌ MISSING | Only in Advanced tab for users |
| [ ] | `createchar` | createchar.php | ❌ MISSING | Create character — not in sidebar |

---

## 🎮 GAME & ANALYTICS
| Status | Action Key | File | New Sidebar Link | Notes |
|--------|-----------|------|-----------------|-------|
| [x] | `online` | online.php | ✅ Online List | |
| [x] | `characters` | character-management.php | ✅ Entity Search | |
| [x] | `reflog` | reflog.php | ✅ Refer Log | |
| [x] | `voters` | voters.php | ✅ Most Voters | |
| [ ] | `gpholder` | Proplayer.php | ❌ MISSING from Game section | Exists in Economy section only |
| [ ] | `log` | log.php | ❌ MISSING | Master Chat — was in Support & Comm, needs re-check |

---

## 🎫 SUPPORT & COMMUNICATION
| Status | Action Key | File | New Sidebar Link | Notes |
|--------|-----------|------|-----------------|-------|
| [x] | `latestCases` | latest-cases.php | ✅ Recent Tickets | |
| [x] | `log` | log.php | ✅ Master Chat | |
| [x] | `latestSuggetion` | latest-suggetion.php | ✅ View Feedback | |
| [x] | `caseManagement` | case-manager.php | ✅ (via latestCases) | |
| [x] | `answerCase` | answer-case.php | ✅ (linked from case) | |
| [x] | `viewCase` | view-case.php | ✅ (linked from case) | |
| [ ] | `checkSuggetion` | check_suggation.php | ❌ MISSING from admin sidebar | User-only link, no admin view |
| [ ] | `view-suggetion` | view-suggetion.php | ❌ MISSING | Action not registered in panel |

---

## 💰 ECONOMY & POINTS
| Status | Action Key | File | New Sidebar Link | Notes |
|--------|-----------|------|-----------------|-------|
| [x] | `addGiftPoint` | add-gift-point.php | ✅ Add Gift Point | |
| [x] | `addTPoint` | add-tpoints.php | ✅ Grant T-Points | |
| [x] | `massiveTPointsADD` | massive-tpoint-add.php | ✅ Massive T-Points | |
| [x] | `paypalPackages` | payment-packages.php | ✅ PayPal Packages | CRUD + Live Rates |
| [x] | `gcashPackages` | payment-packages.php | ✅ GCash Packages | CRUD + Live Rates |
| [x] | `addDonatePoint` | add-donate-point.php | ✅ Add Donate Point | |
| [x] | `CodeStatus` | gpstatus.php | ✅ Code Status | |
| [x] | `Donators` | donators.php | ✅ Top Supporters | |
| [x] | `gpholder` | Proplayer.php | ✅ Economy Leaders | |
| [ ] | `geracode` | code-generator.php | ❌ MISSING | Gift Code Generator — not in admin sidebar |

---

## 🛒 SHOP & PACKAGES
| Status | Action Key | File | New Sidebar Link | Notes |
|--------|-----------|------|-----------------|-------|
| [x] | `manageShop` | manage-shop.php | ✅ Manage Shop | |
| [x] | `donateShop` | donate-shop.php | ✅ Donate Shop | |
| [x] | `giftShop` | gift-shop.php | ✅ Gift Shop | |
| [x] | `createShopObject` | create-shop-object.php | ✅ Create Shop Object | |
| [x] | `createShopPackage` | create-package.php | ✅ Create Shop Package | |
| [x] | `addPackageItem` | add-package-item.php | ✅ Add Package Item | |
| [ ] | `updateShopItem` | update-shop-item.php | ❌ MISSING | Not directly accessible from sidebar |
| [ ] | `deleteShopItem` | delete-shop-item.php | ❌ MISSING | Called from manage-shop.php links |
| [ ] | `updateShopPackage` | update-shop-package.php | ❌ MISSING | Called from package list |
| [ ] | `deleteShopPackage` | delete-shop-package.php | ❌ MISSING | Called from package list |
| [ ] | `giftitems` | gift-items.php | ❌ MISSING | Gift item management — not in sidebar |
| [ ] | `donateitems` | donate-items.php | ❌ MISSING | Donate item management — not in sidebar |
| [ ] | `vipanel` | vipanel.php | ❌ MISSING from admin | VIP management — only in user Advanced tab |
| [ ] | `addvip` | add-vip.php | ❌ MISSING | Add VIP — not in sidebar |
| [ ] | `buyVip` | buy-vip.php | ❌ MISSING | User buy VIP — only linked via Advanced tab |

---

## 📰 NEWS & MEDIA
| Status | Action Key | File | New Sidebar Link | Notes |
|--------|-----------|------|-----------------|-------|
| [x] | `manageNews` | manage-news.php | ✅ Manage News | |
| [x] | `addNews` | add-notice.php | ✅ Add News | |
| [x] | `addNewsMainImage` | add-news-main-image.php | ✅ Add News Image | |
| [x] | `addSliderImage` | add-slider-image.php | ✅ Add Slider Image | |
| [x] | `removeSliderImage` | remove-slider-image.php | ✅ Remove Slider Image | |
| [x] | `post` | Screenshots.php | ✅ Screenshots | |
| [ ] | `news` | post-management.php | ❌ MISSING | Full news CRUD — not in sidebar |

---

## 🖥️ SYSTEM & STAFF
| Status | Action Key | File | New Sidebar Link | Notes |
|--------|-----------|------|-----------------|-------|
| [x] | `Staff` | staff.php | ✅ GM List | |
| [x] | `staffHidden` | hidden-staff-account.php | ✅ Hidden Staff | |
| [x] | `paymentsRecived` | payments-recived.php | ✅ Payments Received | |
| [x] | `paypalSettings` | paypal-settings.php | ✅ PayPal API | |
| [x] | `gcashSettings` | gcash-settings.php | ✅ GCash API | |
| [x] | `settings` | system-settings.php | ✅ Node Settings | |
| [ ] | `acountpassword` | acounts.php | ❌ MISSING | User account password — not in sidebar |

---

## 👤 USER SELF-SERVICE (Advanced Tab)
| Status | Action Key | File | New Dashboard Location | Notes |
|--------|-----------|------|----------------------|-------|
| [x] | `changePassword` | change-password.php | ✅ Advanced > Service Desk | |
| [x] | `changeEmail` | change-email.php | ✅ Advanced > Service Desk | |
| [x] | `createCase` | create-case.php | ✅ Advanced > Service Desk | |
| [x] | `checkCases` | check-cases.php | ✅ Advanced > Service Desk | |
| [x] | `timegift` | VoteTime.php | ✅ Advanced > Service Desk | |
| [x] | `addcode` | add-gift-code.php | ✅ Advanced > Service Desk | |
| [ ] | `createSuggetion` | Suggetion.php | ❌ MISSING | User feedback submission — not in Advanced tab |
| [ ] | `checkSuggetion` | check_suggation.php | ❌ MISSING | User check own suggestions |
| [ ] | `ChangeNick` | change-nick.php | ❌ MISSING | Nick/username change — not in user panel |
| [ ] | `Refer` | refer.php | ❌ MISSING | Referral system — not in user panel |
| [ ] | `buyVip` | buy-vip.php | ❌ MISSING | User buy VIP — not fully exposed |
| [ ] | `vipanel` | vipanel.php | ❌ MISSING | User VIP panel |

---

## 📝 ITEMS TO ADD TO NEW DASHBOARD (Priority Order)

### 🔴 HIGH PRIORITY (admin tools not in sidebar)
1. `geracode` → Gift Code Generator → Economy & Points
2. `news` → Full News Management → News & Media
3. `deleteCharacterByStaff` → Account Mgmt  
4. `giftitems` → Shop & Packages (gift item manager)
5. `donateitems` → Shop & Packages (donate item manager)
6. `addvip` → Shop/VIP section

### 🟡 MEDIUM PRIORITY (user-facing missing)
7. `createSuggetion` → Advanced tab user panel
8. `ChangeNick` → Advanced tab user panel
9. `Refer` → Advanced tab user panel
10. `vipanel` → Advanced tab or admin panel
11. `buyVip` → User panel

### 🟢 LOW PRIORITY (called from other pages)
12. `updateShopItem` / `deleteShopItem` → called internally from manage-shop
13. `updateShopPackage` / `deleteShopPackage` → called from package list
14. `checkSuggetion` → Admin view of suggestion detail
15. `view-suggetion` → Admin view suggestion

---

## 🗓️ PROGRESS LOG
| Date | Action | By |
|------|--------|-----|
| 2026-04-16 | Email & SMTP System: t_smtp_settings + t_password_resets tables created | Antigravity |
| 2026-04-16 | Functions/Mailer.php created (pure PHP SMTP, no external libs) | Antigravity |
| 2026-04-16 | Actions/smtp-settings.php: Admin Gmail SMTP + reCAPTCHA settings page | Antigravity |
| 2026-04-16 | forgot-password.php: Forgot password modal with token-based email flow | Antigravity |
| 2026-04-16 | reset-password.php: Standalone token-verified password reset page | Antigravity |
| 2026-04-16 | register.php: Added conditional reCAPTCHA v2 + Forgot Password link | Antigravity |
| 2026-04-16 | All 76 action files audited, all missing sidebar links added to dashboard.php | Antigravity |
| 2026-04-16 | All missing switch cases added to legacy_panel.php, acountpassword typo fixed | Antigravity |

---

## 🔧 NEXT STEPS (resume from here)
1. Add missing HIGH PRIORITY sidebar links to `dashboard.php`
2. Add missing user-facing links to Advanced tab
3. Register any unregistered actions in `legacy_panel.php`
4. Verify each item works in the iframe by testing in browser
5. After all links added → do a full checklist reviewed with user
