#!/bin/bash

echo "🚀 Setting up Bin Naaem Industries Website..."
echo ""

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "❌ PHP is not installed or not in PATH"
    echo "   Please install PHP 7.4+ first:"
    echo "   - macOS: brew install php"
    echo "   - Or download from: https://www.php.net/downloads"
    exit 1
fi

# Check PHP version
PHP_VERSION=$(php -r 'echo PHP_VERSION;')
echo "✅ PHP version: $PHP_VERSION"

# Check if Composer is installed
if ! command -v composer &> /dev/null; then
    echo "⚠️  Composer is not installed"
    echo "   Installing Composer..."
    
    if command -v curl &> /dev/null; then
        curl -sS https://getcomposer.org/installer | php
        if [ -f composer.phar ]; then
            echo "✅ Composer installed locally"
            COMPOSER_CMD="php composer.phar"
        else
            echo "❌ Failed to install Composer"
            exit 1
        fi
    else
        echo "❌ curl is required to install Composer"
        echo "   Please install Composer manually: https://getcomposer.org/download/"
        exit 1
    fi
else
    echo "✅ Composer found"
    COMPOSER_CMD="composer"
fi

# Install dependencies
echo ""
echo "📦 Installing PHP dependencies..."
$COMPOSER_CMD install

# Check if .env exists
if [ ! -f .env ]; then
    echo ""
    echo "📝 Creating .env file from .env.example..."
    cp .env.example .env
    echo "⚠️  Please edit .env and add your cPanel email credentials:"
    echo "   SMTP_USERNAME=info@binnaeemindustries.com"
    echo "   SMTP_PASSWORD=your_email_password_here"
    echo "   Get credentials from: cPanel → Email Accounts"
else
    echo "✅ .env file already exists"
fi

echo ""
echo "✅ Setup complete!"
echo ""
echo "📋 Next steps:"
echo "   1. Edit .env and add your cPanel email credentials"
echo "   2. Run: php -S localhost:8000 -t public"
echo "   3. Open: http://localhost:8000"
echo ""
