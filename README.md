# Bin Naaem Industries Website

Corporate website for Bin Naaem Industries - showcasing industrial engineering capabilities, brands, and services.

## Technology Stack

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, Tailwind CSS, JavaScript
- **Email Service**: cPanel SMTP (PHPMailer)
- **Icons**: Material Icons

## Prerequisites

- PHP 7.4 or higher
- Composer (for dependency management)
- cPanel email account (already set up in your hosting)

### Installing PHP (if not already installed)

**macOS:**
```bash
brew install php
```

**Linux (Ubuntu/Debian):**
```bash
sudo apt update
sudo apt install php php-cli
```

**Windows:**
Download from [php.net](https://www.php.net/downloads) or use [XAMPP](https://www.apachefriends.org/)

### Installing Composer

**macOS/Linux:**
```bash
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

**Or use the setup script:**
```bash
./setup.sh
```

## Quick Start

### Option 1: Automated Setup (Recommended)

Run the setup script:

```bash
./setup.sh
```

This will:
- Check PHP installation
- Install Composer (if needed)
- Install dependencies
- Create `.env` file

### Option 2: Manual Setup

#### 1. Install Dependencies

```bash
composer install
```

#### 2. Configure Environment Variables

Copy the example environment file and add your cPanel email credentials:

```bash
cp .env.example .env
```

Edit `.env` and add your cPanel email account details:

```env
SMTP_HOST=localhost
SMTP_PORT=587
SMTP_USERNAME=info@binnaeemindustries.com
SMTP_PASSWORD=your_email_password_here
SMTP_FROM_EMAIL=info@binnaeemindustries.com
SMTP_FROM_NAME=Bin Naaem Industries
SMTP_TO_EMAIL=info@binnaeemindustries.com
```

**Important**: 
- Use one of your existing cPanel email accounts (like `info@binnaeemindustries.com` from your cPanel)
- `SMTP_HOST` is usually `localhost` for cPanel, or `mail.yourdomain.com`
- `SMTP_PORT` is typically `587` (STARTTLS) or `465` (SSL)
- `SMTP_USERNAME` should be the full email address
- `SMTP_PASSWORD` is the password for that email account

#### 3. Run the Development Server

Start PHP's built-in development server:

```bash
php -S localhost:8000 -t public
```

Or if you prefer a different port:

```bash
php -S localhost:3000 -t public
```

#### 4. Access the Website

Open your browser and navigate to:
- **Homepage**: http://localhost:8000
- **Contact Page**: http://localhost:8000/contact.php

## Project Structure

```
├── public/              # Main PHP pages (web root)
│   ├── index.php       # Homepage
│   ├── contact.php     # Contact page
│   ├── capabilities.php
│   ├── brands.php
│   └── send-inquiry.php # Form handler
├── includes/           # Reusable PHP components
│   ├── config.php      # Configuration & environment loading
│   ├── header.php
│   ├── footer.php
│   └── ...
├── assets/             # CSS, JS, images (currently empty, reserved for future use)
├── brands/            # Brand-specific pages
├── .env               # Environment variables (not in git)
├── composer.json      # PHP dependencies
└── README.md          # This file
```

## Features

- ✅ Dark mode support (default)
- ✅ Responsive design
- ✅ Contact/inquiry forms with email notifications via cPanel SMTP
- ✅ SEO optimization
- ✅ WhatsApp CTA integration
- ✅ Multi-page structure

## Email Configuration

The contact form sends emails using your cPanel email accounts via SMTP. Make sure:

1. You have an email account set up in cPanel (like `info@binnaeemindustries.com`)
2. Your email credentials are set in `.env`
3. The `SMTP_HOST` is correct (usually `localhost` for cPanel)
4. The `SMTP_PORT` matches your server configuration (587 for STARTTLS is recommended)
5. The `SMTP_TO_EMAIL` is set to where you want to receive inquiries

## Production Deployment

For production:

1. Set up a proper web server (Apache/Nginx)
2. Point the document root to the `public/` directory
3. Ensure `.env` is properly configured with production credentials
4. Make sure `vendor/` directory is accessible
5. Set proper file permissions

## Troubleshooting

### Emails not sending?
- Check that your SMTP credentials are correct in `.env`
- Verify the `SMTP_HOST` is correct (usually `localhost` for cPanel)
- Try `SMTP_PORT` 465 if 587 doesn't work
- Check email account password is correct in cPanel
- Check PHP error logs for any exceptions

### Composer not found?
- Install Composer: https://getcomposer.org/download/
- Or use: `php composer.phar install`

### Page not loading?
- Make sure you're running the server from the project root
- Verify the `-t public` flag points to the correct directory
- Check that all PHP files have proper permissions

## License

© Bin Naaem Industries 2023. All Rights Reserved.
