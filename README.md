# Welcome to OpenSoaringAnalyzer!

Welcome to OpenSoaringAnalyzer, an open-source web application built with Laravel for analyzing and visualizing glider flights.

## Features

- Import and parse GPX files to extract flight data (Basics implemented)
- Visualize flight tracks on interactive maps (Not yet implemented)
- Calculate flight statistics such as distance, duration, maximum altitude, etc. (Not yet implemented)

## Installation

To install and set up OpenSoaringAnalyzer, follow these steps:

1. Clone the repository: `git clone https://github.com/TijsVsN/OpenSoaringAnalyzer.git`
2. Install dependencies: `composer install`
3. Configure your environment variables: `cp .env.example .env` and update the necessary settings
4. Generate the application key: `php artisan key:generate`
5. Start the local development server: `php artisan serve`
6. Start the NPM development server: `npm run dev`

## Contributing

Contributions are welcome! If you want to contribute to OpenSoaringAnalyzer, feel free to create a pull request!

## License

OpenSoaringAnalyzer is open-source software licensed under the MIT license. Feel free to use, modify, and distribute the code.

> :warning: May not work with all GPX files! Currently tested with GPXs from [XCsoar](https://github.com/XCSoar/XCSoar) and [SimFlightPath](https://flightsim.to/file/15872/simflightpath)