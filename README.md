# E-commerce Shop of Clothes

This is an E-commerce web application for selling clothes, built using the Laravel framework. The platform provides a user-friendly interface for customers and a robust management panel for administrators.

## Features

- **User Registration and Authentication**: Secure login and registration system with email verification.
- **Product Management**: Add, edit, delete, and categorize products.
- **Shopping Cart**: Add items to the cart and manage the cart's content.
- **Order Management**: Place orders, view order history, and track order status.
- **Payment Integration**: Integrates with popular payment gateways (e.g., Stripe, PayPal).
- **Admin Panel**: Manage products, categories, orders, and users.
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices.

## Installation

### Prerequisites

1. PHP >= 8.0
2. Composer
3. MySQL
4. Laravel >= 10.x
5. Node.js and npm

### Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/ecommerce-shop.git
   cd ecommerce-shop
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Copy the `.env` file and configure your environment variables:

   ```bash
   cp .env.example .env
   ```

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Set up the database:

   - Create a new MySQL database.
   - Update the `.env` file with your database credentials.

6. Run the migrations and seed the database:

   ```bash
   php artisan migrate --seed
   ```

7. Install front-end dependencies:

   ```bash
   npm install && npm run dev
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

   The application will be accessible at `http://127.0.0.1:8000`.

## Usage

### User Features

- Browse products by category.
- Search for products using keywords.
- Add products to the shopping cart.
- Place orders and make payments.

### Admin Features

- Access the admin dashboard.
- Manage products and categories.
- View and process orders.
- Manage user accounts.

## Testing

Run the test suite to ensure the application works as expected:

```bash
php artisan test
```


## License

This project is open-source and available under the [MIT License](LICENSE).

## Acknowledgments

- Laravel documentation: [https://laravel.com/docs](https://laravel.com/docs)
- Community contributors
