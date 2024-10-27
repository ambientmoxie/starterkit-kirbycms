# Getting Started with the Starter Kit

Follow these steps to set up the project:

1. **Clone the Repository**:  
   Use `git clone [repository-url]` to clone the repo to your local machine.

2. **Install Dependencies**:  
   - Run `composer install` to install the correct version of Kirby along with the necessary vendor folders.
   - Execute `npm install` to install the node_modules folder.

3. **Environment Variables Configuration**:
    
    This project uses environment variables to manage settings for development and production. These variables are defined in a .env file located in the project root and are loaded automatically by phpdotenv in ./site/config/config.php.

    - Copy the example file `.env.example` to create your own `.env` file with specific values.
    - Set VITE_DEV_SERVER_IP to your local IP to allow HMR access across devices on the network.
    - Set VITE_DEV to true for development mode with HMR or false for production.

4. **Development and Production**:
   - `npm run dev` makes assets available over the network for development.
   - `npm run build` bundles CSS and JS assets for production.

   Style and script tags are automatically included in the header based on the VITE_DEV value.
