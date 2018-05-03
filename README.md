# Please note that this is not yet ready for production! I plan on merging the stable branch in a few days!

# Meetup Event Embed Block for Gutenberg
A block for Gutenberg that adds a dynamic Meetup Events Embed to posts

## Installation

```git clone https://github.com/dainemawer/meetup-event-gutenberg-block.git```

- `cd` into the plugin folder, locate the webpack.config.js file

- In that directory run `npm run dev` to create a compiled `block.build.js`

- Make sure you have Gutenberg installed: https://wordpress.org/plugins/gutenberg/

- Log in to WordPress and visit Plugins -> All Plugins

- Activate "Github Embed Block"

- Navigate to Posts or Pages -> Add New or edit an already saved post / page.

- Click on the + icon in the Gutenberg editor and visit Widgets -> Github Embed

## Usage

- The block uses Meetups API to allow users to embed events when inputting event ID's into the blocks input. The API calls data like guests, organizers, location and more. Perfect for marketing Meetup Events on your site in an interesting and engaging way.

## License
GPL 2.0 or later

## Support my work
The plugin is free to use, but I develop in my spare time, if you're happy with the development of the plugin, or want to see new features, please post an issue and support my work by making a donation: https://www.paypal.me/dainemawer
