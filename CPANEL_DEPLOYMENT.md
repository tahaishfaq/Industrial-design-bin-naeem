# cPanel Deployment Guide

Complete step-by-step guide for deploying Bin Naaem Industries website to a client's cPanel hosting.

## Table of Contents

1. [Prerequisites](#prerequisites)
2. [Pre-Deployment Preparation](#pre-deployment-preparation)
3. [Uploading Files to cPanel](#uploading-files-to-cpanel)
4. [Setting Document Root](#setting-document-root)
5. [Installing Dependencies](#installing-dependencies)
6. [Configuring Environment Variables](#configuring-environment-variables)
7. [Setting File Permissions](#setting-file-permissions)
8. [Email Configuration](#email-configuration)
9. [Testing & Verification](#testing--verification)
10. [Troubleshooting](#troubleshooting)

---

## Prerequisites

Before starting, ensure you have:

- ✅ cPanel access credentials
- ✅ FTP/SFTP access or cPanel File Manager access
- ✅ SSH access (recommended for Composer installation)
- ✅ PHP 7.4 or higher available on the server
- ✅ An email account created in cPanel for SMTP

### Check PHP Version

1. Log in to cPanel
2. Go to **Select PHP Version** (or **MultiPHP Manager**)
3. Verify PHP 7.4+ is available and selected
4. Enable these extensions:
   - `mbstring`
   - `openssl`
   - `curl`
   - `zip`

---

## Pre-Deployment Preparation

### Option 1: Prepare Files Locally

Create a deployment package excluding unnecessary files:

```bash
# Create deployment zip
zip -r bin-naeem-deploy.zip . \
  -x "*.git*" \
  -x ".env*" \
  -x "node_modules/*" \
  -x ".DS_Store" \
  -x "*.log" \
  -x "README.md" \
  -x "QUICKSTART.md" \
  -x "setup.sh" \
  -x "Dockerfile" \
  -x ".dockerignore" \
  -x "render.yaml"
```

### Option 2: Use Git (if cPanel supports Git)

1. In cPanel, go to **Git Version Control**
2. Create a new repository
3. Clone your GitHub repository:
   ```
   https://github.com/your-username/Industrial-design-bin-naeem.git
   ```

---

## Uploading Files to cPanel

### Method 1: Using cPanel File Manager

1. Log in to cPanel
2. Open **File Manager**
3. Navigate to `public_html` (or your domain's document root)
4. **Upload** your files:
   - Click **Upload** button
   - Select your deployment zip file
   - Wait for upload to complete
   - **Extract** the zip file
5. Your structure should look like:
   ```
   public_html/
   ├── includes/
   ├── public/
   │   ├── index.php
   │   ├── contact.php
   │   ├── brands/
   │   └── ...
   ├── vendor/ (will be created after Composer install)
   ├── composer.json
   ├── composer.lock
   └── .env (you'll create this)
   ```

### Method 2: Using FTP/SFTP

1. Use an FTP client (FileZilla, Cyberduck, etc.)
2. Connect using cPanel FTP credentials
3. Navigate to `public_html`
4. Upload all project files maintaining the directory structure

---

## Setting Document Root

You need to point the web server to the `public/` directory. Choose one method:

### Method 1: Using .htaccess (Recommended)

Create or update `.htaccess` file in `public_html/` root:

```apache
# Redirect all requests to public directory
RewriteEngine On
RewriteCond %{REQUEST_URI} !^/public/
RewriteRule ^(.*)$ /public/$1 [L]

# Prevent direct access to sensitive files
<FilesMatch "^\.">
    Order allow,deny
    Deny from all
</FilesMatch>
```

### Method 2: Change Document Root in cPanel

1. Go to **Subdomains** or **Addon Domains**
2. Find your domain
3. Click **Edit** or **Change Document Root**
4. Set document root to: `public_html/public`
5. Save changes

### Method 3: Move Files (If you can't change document root)

If you cannot change the document root, move files:

1. Move all contents from `public/` to `public_html/`
2. Move `includes/`, `vendor/`, `composer.json` to `public_html/`
3. Update paths in `includes/config.php` if needed

---

## Installing Dependencies

### Step 1: Access Terminal/SSH

1. In cPanel, go to **Terminal** (or use SSH)
2. Navigate to your project directory:
   ```bash
   cd ~/public_html
   # or
   cd ~/domains/yourdomain.com/public_html
   ```

### Step 2: Install Composer (if not installed)

```bash
# Download Composer
curl -sS https://getcomposer.org/installer | php

# Make it executable
chmod +x composer.phar

# Test installation
php composer.phar --version
```

**Note:** Some hosts have Composer pre-installed. Try `composer --version` first.

### Step 3: Install PHP Dependencies

```bash
# Install dependencies (production mode)
php composer.phar install --no-dev --optimize-autoloader

# Or if Composer is globally installed:
composer install --no-dev --optimize-autoloader
```

This will create the `vendor/` directory with all required packages.

---

## Configuring Environment Variables

### Step 1: Create .env File

1. In **File Manager**, navigate to project root (same level as `composer.json`)
2. Click **+ File** → Create new file
3. Name it: `.env`
4. Click **Edit** to open the file

### Step 2: Add SMTP Configuration

Paste the following and update with your actual values:

```env
# SMTP Configuration (cPanel Email)
SMTP_HOST=localhost
SMTP_PORT=587
SMTP_USERNAME=info@binnaeemindustries.com
SMTP_PASSWORD=your-email-password-here
SMTP_FROM_EMAIL=info@binnaeemindustries.com
SMTP_FROM_NAME=Bin Naaem Industries
SMTP_TO_EMAIL=info@binnaeemindustries.com
```

### Step 3: Get Email Credentials

1. Go to cPanel → **Email Accounts**
2. Find or create the email account (e.g., `info@binnaeemindustries.com`)
3. Click **Set Up Mail Client** or **Configure Mail Client**
4. Note the credentials:
   - **Username:** Full email address
   - **Password:** Email account password
   - **Server:** Usually `localhost` or `mail.yourdomain.com`
   - **Port:** `587` (STARTTLS) or `465` (SSL)

### Step 4: Update .env with Actual Values

Replace placeholder values in `.env`:
- `SMTP_HOST`: Usually `localhost` for cPanel
- `SMTP_PORT`: `587` (or `465` for SSL)
- `SMTP_USERNAME`: Full email address
- `SMTP_PASSWORD`: Email account password from cPanel

---

## Setting File Permissions

### Via File Manager

1. Select all files and folders
2. Click **Permissions** (or right-click → Change Permissions)
3. Set:
   - **Folders:** `755`
   - **Files:** `644`
   - **public/ directory:** `755`

### Via SSH/Terminal

```bash
# Set folder permissions
find . -type d -exec chmod 755 {} \;

# Set file permissions
find . -type f -exec chmod 644 {} \;

# Ensure public directory is accessible
chmod 755 public

# Make .env readable (but secure)
chmod 600 .env
```

---

## Email Configuration

### Step 1: Create Email Account in cPanel

1. Go to cPanel → **Email Accounts**
2. Click **Create**
3. Fill in:
   - **Email:** `info@binnaeemindustries.com`
   - **Password:** Create a strong password
   - **Mailbox Quota:** Set as needed
4. Click **Create**

### Step 2: Test Email Settings

1. Go to **Email Accounts** → Click **Check Email**
2. Send a test email to verify the account works
3. Note the SMTP settings for your `.env` file

### Step 3: Alternative SMTP Ports

If port `587` doesn't work, try:

```env
# For SSL/TLS
SMTP_PORT=465
```

Update `send-inquiry.php` if needed to use SSL instead of STARTTLS.

---

## Testing & Verification

### Step 1: Test Website Access

1. Open your browser
2. Visit: `https://yourdomain.com`
3. Verify the homepage loads correctly
4. Check all pages:
   - Homepage
   - Services/Capabilities
   - Projects/Industries
   - Brands
   - About/Leadership
   - Contact

### Step 2: Test Contact Form

1. Go to the Contact page
2. Fill out the inquiry form
3. Submit the form
4. Check if you receive the email at `SMTP_TO_EMAIL`

### Step 3: Check Error Logs

1. In cPanel, go to **Errors** or **Error Log**
2. Check for any PHP errors
3. Fix any issues found

### Step 4: Verify File Structure

Ensure these files/directories exist:
- ✅ `public/index.php`
- ✅ `includes/config.php`
- ✅ `vendor/` directory (with PHPMailer)
- ✅ `.env` file (with correct SMTP settings)
- ✅ `composer.json` and `composer.lock`

---

## Troubleshooting

### Issue: 500 Internal Server Error

**Solutions:**
1. Check **Error Log** in cPanel for specific error message
2. Verify file permissions (folders: 755, files: 644)
3. Ensure `.env` file exists and is readable
4. Check PHP version is 7.4+
5. Verify `vendor/` directory exists (run `composer install`)

### Issue: Page Not Found (404)

**Solutions:**
1. Verify document root points to `public/` directory
2. Check `.htaccess` file exists and has correct rewrite rules
3. Ensure `index.php` exists in `public/` directory
4. Try accessing: `yourdomain.com/index.php` directly

### Issue: Composer Not Found

**Solutions:**
1. Install Composer via SSH:
   ```bash
   curl -sS https://getcomposer.org/installer | php
   ```
2. Use full path: `php composer.phar install`
3. Contact hosting support to install Composer globally

### Issue: Emails Not Sending

**Solutions:**
1. Verify SMTP credentials in `.env` are correct
2. Check email account exists in cPanel → Email Accounts
3. Try different SMTP port:
   - Port `587` (STARTTLS)
   - Port `465` (SSL)
4. Check PHP error logs for SMTP connection errors
5. Verify `SMTP_HOST` is correct (usually `localhost`)
6. Test email account by sending email from cPanel webmail

### Issue: Styles/CSS Not Loading

**Solutions:**
1. Check browser console for 404 errors
2. Verify Tailwind CSS CDN links are correct in `page-start.php`
3. Clear browser cache
4. Check file permissions on CSS/JS files

### Issue: PHP Parse Errors

**Solutions:**
1. Check PHP version (needs 7.4+)
2. Verify all PHP files have proper closing tags
3. Check for syntax errors in error logs
4. Ensure `vendor/autoload.php` is being loaded correctly

### Issue: Permission Denied Errors

**Solutions:**
1. Set correct file permissions:
   ```bash
   find . -type d -exec chmod 755 {} \;
   find . -type f -exec chmod 644 {} \;
   ```
2. Ensure web server user can read files
3. Check `.env` file permissions (should be 600)

---

## Post-Deployment Checklist

- [ ] All files uploaded to cPanel
- [ ] Document root set to `public/` directory
- [ ] Composer dependencies installed (`vendor/` folder exists)
- [ ] `.env` file created with correct SMTP settings
- [ ] File permissions set correctly
- [ ] PHP version is 7.4 or higher
- [ ] Email account created in cPanel
- [ ] Website loads correctly at domain
- [ ] All pages accessible (Home, Services, Projects, Brands, About, Contact)
- [ ] Contact form sends emails successfully
- [ ] No errors in error logs
- [ ] SSL certificate installed (for HTTPS)

---

## Quick Reference: SMTP Settings

For most cPanel hosts, use these settings:

```env
SMTP_HOST=localhost
SMTP_PORT=587
SMTP_USERNAME=info@binnaeemindustries.com
SMTP_PASSWORD=your-email-password
SMTP_FROM_EMAIL=info@binnaeemindustries.com
SMTP_FROM_NAME=Bin Naaem Industries
SMTP_TO_EMAIL=info@binnaeemindustries.com
```

**Alternative ports:**
- `587` - STARTTLS (recommended)
- `465` - SSL/TLS
- `25` - Standard SMTP (may be blocked)

---

## Support

If you encounter issues not covered in this guide:

1. Check cPanel **Error Logs**
2. Review PHP error messages
3. Verify all prerequisites are met
4. Contact hosting support if needed

For project-specific issues, refer to the main `README.md` file.

---

## Additional Notes

- **Security:** Never commit `.env` file to version control
- **Backup:** Always backup before making changes
- **Updates:** To update the site, upload new files and run `composer install` again
- **Performance:** Consider enabling caching in cPanel if available
- **SSL:** Ensure SSL certificate is installed for HTTPS

---

**Last Updated:** 2024
**Project:** Bin Naaem Industries Website
**Version:** 1.0
