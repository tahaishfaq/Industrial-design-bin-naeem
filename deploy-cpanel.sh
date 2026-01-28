#!/bin/bash
# cPanel Deployment Script
# Run this script via SSH after uploading files to cPanel

echo "========================================="
echo "Bin Naaem Industries - cPanel Deployment"
echo "========================================="
echo ""

# Check if we're in the right directory
if [ ! -f "composer.json" ]; then
    echo "❌ Error: composer.json not found!"
    echo "Please run this script from the project root directory."
    exit 1
fi

echo "✅ Found composer.json"
echo ""

# Check if Composer is installed
if command -v composer &> /dev/null; then
    COMPOSER_CMD="composer"
    echo "✅ Using global Composer"
elif [ -f "composer.phar" ]; then
    COMPOSER_CMD="php composer.phar"
    echo "✅ Using local composer.phar"
else
    echo "📥 Installing Composer..."
    curl -sS https://getcomposer.org/installer | php
    if [ -f "composer.phar" ]; then
        COMPOSER_CMD="php composer.phar"
        chmod +x composer.phar
        echo "✅ Composer installed successfully"
    else
        echo "❌ Error: Failed to install Composer"
        exit 1
    fi
fi

echo ""
echo "📦 Installing PHP dependencies..."
$COMPOSER_CMD install --no-dev --optimize-autoloader --no-interaction

if [ $? -eq 0 ]; then
    echo "✅ Dependencies installed successfully"
else
    echo "❌ Error: Failed to install dependencies"
    exit 1
fi

echo ""
echo "🔒 Setting file permissions..."

# Set folder permissions
find . -type d -exec chmod 755 {} \; 2>/dev/null
echo "✅ Folder permissions set (755)"

# Set file permissions
find . -type f -exec chmod 644 {} \; 2>/dev/null
echo "✅ File permissions set (644)"

# Secure .env file
if [ -f ".env" ]; then
    chmod 600 .env
    echo "✅ .env file secured (600)"
else
    echo "⚠️  Warning: .env file not found"
    echo "   Please create .env file with SMTP settings"
fi

# Ensure public directory is accessible
if [ -d "public" ]; then
    chmod 755 public
    echo "✅ public/ directory permissions set (755)"
fi

echo ""
echo "========================================="
echo "✅ Deployment completed successfully!"
echo "========================================="
echo ""
echo "Next steps:"
echo "1. Create/update .env file with SMTP settings"
echo "2. Verify document root points to public/ directory"
echo "3. Test the website and contact form"
echo "4. Check error logs if any issues occur"
echo ""
echo "For detailed instructions, see CPANEL_DEPLOYMENT.md"
echo ""
