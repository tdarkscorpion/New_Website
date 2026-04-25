# Talisman Project - Website Migration

## Task List
- [ ] Set up Docker environment (talisman-docker) with PHP 7 and MySQL 5.
- [ ] Import database structure from `database structure for old website .sql`.
- [ ] Analyze functional logic in `old with functions`.
- [ ] Integrate functions into the new theme in `new where we need functions`.
- [ ] Fix existing issues in the new theme.
- [ ] Ensure MD5 encryption is used for passwords (game requirement).
- [ ] Verify website functionality in the browser.

## Database Credentials
- **Host:** `localhost` (inside docker: `db`)
- **Port:** `3306`
- **User:** `root`
- **Password:** `talisman_pwd`
- **Databases:** `db_account`, `db_game`

## Login Details
- **Test Admin Account:** `admin` / `admin123` (needs to be created in DB)
- **Database GUI:** Adminer/PHPMyAdmin (if included in docker)

## Notes
- Game supports MySQL 5.3.
- All password logic MUST use MD5.
- Theme from `new where we need functions` must be preserved.
