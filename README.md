<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About nft_profile_generator

nft_profile_generator is an application designed to create unique NFT profiles for users. It allows users to generate personalized NFT profiles that can be showcased on various platforms. The application leverages blockchain technology to ensure the authenticity and ownership of each NFT profile, making it a valuable tool for artists, collectors, and enthusiasts in the NFT space.

## Application Progress

### Packages Installed
- **Laravel Framework**: The core framework for building the application.
- **Intervention Image**: For image manipulation and processing.
- **Laravel Sanctum**: For API token authentication.
- **Spatie Laravel Media Library**: To manage media uploads and associations with models.
- **Laravel Cashier**: For handling subscription billing with Stripe.

### Migrations Made
- **create_users_table**: Stores user information including name, email, and password.
- **create_nft_profiles_table**: Contains fields for NFT profile details such as title, description, image URL, and owner ID.
- **create_transactions_table**: Records transactions related to NFT profile purchases and sales.
- **create_collections_table**: Manages collections of NFTs created by users.
- **create_nft_transactions_table**: Tracks transactions specifically related to NFTs.
- **create_generator_settings_table**: Stores settings for NFT generation processes.

### Features Implemented
- User registration and authentication.
- NFT profile creation and management.
- Image upload functionality for NFT profiles.
- Basic transaction handling for NFT purchases.
- **Collection Management**: Users can create and manage collections of NFTs.
- **NFT Transaction Tracking**: Users can view and manage their NFT transactions.

### New Controllers and Services
- **CollectionController**: Handles requests related to NFT collections.
- **GeneratorController**: Manages the generation of NFTs.
- **NFTController**: Manages NFT-related operations.
- **WalletController**: Manages user wallet interactions.
- **Web3Service**: Provides services for interacting with Web3 functionalities.

### Future Work
- Implementing advanced features such as NFT minting and blockchain integration.
- Enhancing the user interface for better user experience.
- Adding analytics and reporting features for users to track their NFT profiles.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
