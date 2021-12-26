# Gist of Customizations
1. Customized `webpack.config.js` file
2. update `esnetxt.example.php` file to use glob for file path pattern search

# Add your blocks
Create a directory under `./inc/blocks/` with your block name as name of directory.
Then put all your block assets (js, scss) there.
THAT'S IT!


No need to call `register_block_type(__DIR__.....)` as the newly created block will be automatically registered. (See how's done in [`esnext-example.php`](./esnext-example.php#L24-L25))
