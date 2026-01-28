# Quick Start Guide

## ✅ What's Been Set Up

1. **cPanel Email Integration** - Email functionality using your existing cPanel email accounts
2. **Composer Configuration** - PHP dependency management (PHPMailer)
3. **Environment Variables** - Secure email credentials storage
4. **Form Handler** - Contact form sends emails via SMTP

## 🚀 Getting Started (3 Steps)

### Step 1: Install PHP & Composer

**macOS:**
```bash
brew install php composer
```

**Or use the setup script:**
```bash
./setup.sh
```

### Step 2: Install Dependencies & Configure

```bash
# Install PHP packages
composer install

# Copy environment file
cp .env.example .env

# Edit .env and add your cPanel email account details
```

Edit `.env`:
```env
SMTP_HOST=localhost
SMTP_PORT=587
SMTP_USERNAME=info@binnaeemindustries.com
SMTP_PASSWORD=your_email_password_here
SMTP_FROM_EMAIL=info@binnaeemindustries.com
SMTP_FROM_NAME=Bin Naaem Industries
SMTP_TO_EMAIL=info@binnaeemindustries.com
```

### Step 3: Run the Server

```bash
php -S localhost:8000 -t public
```

Visit: **http://localhost:8000**

## 📧 cPanel Email Setup

1. Use one of your existing cPanel email accounts (e.g., `info@binnaeemindustries.com`)
2. Get the email account password from cPanel → Email Accounts
3. Add credentials to your `.env` file:
   - `SMTP_HOST`: Usually `localhost` for cPanel
   - `SMTP_PORT`: `587` (STARTTLS) or `465` (SSL)
   - `SMTP_USERNAME`: Full email address
   - `SMTP_PASSWORD`: Email account password
4. Set `SMTP_TO_EMAIL` to where you want inquiries delivered

## 🧪 Test the Contact Form

1. Go to http://localhost:8000/contact.php
2. Fill out the form
3. Submit - you should receive an email at `SMTP_TO_EMAIL`

## 📁 Project Structure

- `public/` - Web root (point server here)
- `includes/` - PHP components
- `.env` - Your API keys (not in git)
- `composer.json` - PHP dependencies

## ❓ Troubleshooting

**"composer: command not found"**
- Install Composer: https://getcomposer.org/download/
- Or run: `php composer.phar install`

**"PHP not found"**
- Install PHP: `brew install php` (macOS)
- Or download from: https://www.php.net/downloads

**Emails not sending?**
- Check `.env` has correct email credentials
- Verify `SMTP_HOST` is `localhost` (or correct for your server)
- Try `SMTP_PORT` 465 if 587 doesn't work
- Check email account password is correct in cPanel
- Check PHP error logs

## 🎉 You're Ready!

Your website is now configured with cPanel email integration. The contact form will send emails via SMTP when visitors submit inquiries.
