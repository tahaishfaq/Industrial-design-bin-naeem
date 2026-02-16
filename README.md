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

- ✅ Light and dark mode (default is light, with toggle)
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

### Analytics and verification (optional)

- **GA4_MEASUREMENT_ID**: Your Google Analytics 4 Measurement ID (e.g. `G-XXXXXXXXXX`). When set, the site loads the gtag script; loading is gated by cookie consent until the user accepts.
- **GSC_VERIFICATION**: Google Search Console verification string (content of the meta tag). When set, the verification meta tag is output in the `<head>`.

### Cookie consent

A cookie consent banner appears until the user chooses **Accept** or **Decline**. If they accept, GA4 is loaded and the choice is stored in `localStorage` so the banner does not show again. The banner links to the Privacy Policy for details.

### Company profile download

Place your company profile PDF as `public/downloads/company-profile.pdf`. The Contact and Leadership pages show a "Download company profile" link. You can override the path in `.env` with `COMPANY_PROFILE_URL=downloads/company-profile.pdf`.

### Blog

The site includes a minimal blog at `/blog/` (e.g. `public/blog/index.php`). Two placeholder posts are defined in `public/blog/post.php`. You can add more posts in the same file or later connect a CMS.

**Reporting:** Monthly SEO reports, PageSpeed screenshots, and crawlability reports are operational deliverables and are not part of the codebase; they are produced using GA4, GSC, and other tools after deployment.

## Production Deployment

### Deploying to Render

Render doesn't have PHP in the standard language dropdown, but you can deploy using Docker:

1. **Push your code to GitHub/GitLab**
   ```bash
   git add .
   git commit -m "Prepare for deployment"
   git push origin main
   ```

2. **Connect to Render**
   - Go to [render.com](https://render.com)
   - Sign up/Login
   - Click "New +" → "Web Service"
   - Connect your GitHub repository

3. **Configure the Service**
   - **Name**: `bin-naeem-industries` (or your preferred name)
   - **Region**: Choose closest to your users
   - **Branch**: `main` (or your default branch)
   - **Root Directory**: Leave empty
   - **Runtime**: Select **Docker** (this is available in the dropdown)
   - **Dockerfile Path**: `./Dockerfile` (should auto-detect)

4. **Set Environment Variables**
   In Render dashboard, go to "Environment" tab and add:
   ```
   SMTP_HOST=your-smtp-host
   SMTP_PORT=587
   SMTP_USERNAME=your-email@domain.com
   SMTP_PASSWORD=your-password
   SMTP_FROM_EMAIL=info@binnaeemindustries.com
   SMTP_FROM_NAME=Bin Naaem Industries
   SMTP_TO_EMAIL=info@binnaeemindustries.com
   ```

5. **Deploy**
   - Click "Create Web Service"
   - Render will build and deploy automatically
   - Your site will be available at `https://your-app-name.onrender.com`

**Note**: Free tier services spin down after 15 minutes of inactivity. First request after spin-down may take 30-60 seconds.

### Alternative: Using render.yaml

If you prefer configuration as code, you can use the included `render.yaml`:

1. Push your code with `render.yaml` included
2. In Render dashboard, select "Apply Render Configuration"
3. Render will read the configuration automatically

### Traditional Server / cPanel Deployment

For production on a traditional server or cPanel hosting:

**📖 See [CPANEL_DEPLOYMENT.md](CPANEL_DEPLOYMENT.md) for complete step-by-step guide**

Quick steps:
1. Upload files to cPanel `public_html/`
2. Set document root to `public/` directory (or use `.htaccess`)
3. Install Composer dependencies via SSH
4. Create `.env` file with SMTP settings
5. Set proper file permissions
6. Test the website and contact form

**Files included for cPanel:**
- `CPANEL_DEPLOYMENT.md` - Complete deployment guide
- `deploy-cpanel.sh` - Automated deployment script
- `.htaccess.cpanel` - Sample .htaccess for cPanel

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
