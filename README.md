# shopify-import

--------------------------------------------------------
# File Structure
--------------------------------------------------------
Tab p188 is the file we'll be using
https://docs.google.com/spreadsheets/d/1IoCsamjm8gFUABxiB8GpLiYehSOyJ18U6oC6PHYYN7E/edit?usp=sharing

This is a flat file, each line represents a single product
Products with 'magento_product_type' = configurable don't need to be imported (see Magento Products for more info)
BUT we may need to take some of the information for the variants, but I don't think so. I think each variant has all the required info.

- If a simple product has a 'parent_id' then it is a Variant and there will be other Variants that need to be grouped with it.
- See here:
https://monosnap.com/file/Z6bEV0Glsj1KyF7PjBJf8PyQGXa2F0

--------------------------------------------------------
# Magento Products
--------------------------------------------------------

Magento has Simple and Configurable products

- Simple: product with no Variants OR a single variant that is grouped with other variants

- Configurable: Parent product for Simple product Variants

Configurable products are actually a 'parent', that hold all the Simple product 'children'
Its the same concept as Shopify Variants, except in Shopify there's no container product really


--------------------------------------------------------
# Notes
--------------------------------------------------------

https://github.com/LukeTowers/php-shopify-api
https://gist.github.com/molotovbliss/857973a27109b6770346