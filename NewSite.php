<?php

$json = '{
    "Product": [
        {
            "Product_Title": "Rhinestone Cowboy",
            "Product_Text": "This is a Pi Belt",
            "Media_Dimensions": "100",
            "Product_Media": "1"
        },
        {
            "Product_Title": "Rhinestone Cowboy",
            "Product_Text": "This is a Pi Belt",
            "Media_Dimensions": "100",
            "Product_Media": "1"
        },
        {
            "Product_Title": "Rhinestone Cowboy",
            "Product_Text": "This is a Pi Belt",
            "Media_Dimensions": "100",
            "Product_Media": "1"
        },
    ]
}
';

$json_decoded = json_decode($json);

// Note, it's usually a bad idea to use use count() like this;
// cache the count before the for() in a variable and use that.
// This is for demo purposes only. :)


for ($i = 0; $i < count($json_decoded->{'Product'}); $i++) {
    echo "Products:
" . $json_decoded->{'Product'}[$i]->{'Product_Title'} . "
" . $json_decoded->{'Product'}[$i]->{'Product_Text'} . "
" . $json_decoded->{'Product'}[$i]->{'Media_Dimensions'} . "
" . $json_decoded->{'Product'}[$i]->{'Product_Media'} . "

";
}

?>






$length = count($array);
for ($i = 0; $i < $length; $i++) {
  print $array[$i];
}