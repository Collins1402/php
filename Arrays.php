<h1>Arrays</h1>
<?php

$color = array("black", "green", "white", "red");

print ($color);

?>

<pre>
    <?php print_r($color); ?>
</pre>

<h1>Associative Arrays</h1>

<?php
    
$user_emails = array(
    "Alex" => "aokama@yahoo.com",
    "Peter" => "pokama@yahoo.com",
    "John" => "john@yahoo.com"
    );
?>

<pre>
    <?php print_r($user_emails); ?>
</pre>

<h1>Multidimentional Arrays</h1>

<?php

$user_details = [
    "Director" =>[
        "Fullname" => "Alex Okama",
        "Email" => "aokama@yahoo.com",
        "phone" =>[
            "Mobile" => "+254701004028",
            "Cell" => "+254719332171",
            "work" => "+254720709263"
        ],
    ],
    "Secretary" =>[
        "Fullname" => "Juliet Okama",
        "Email" => "jokama@yahoo.com",
        "phone" =>[
            "Mobile" => "+254710425611",
            "Cell" => "+254733871618",
            "work" => "+254793465271"
        ],
    ],
    "Manager" =>[
        "Fullname" => "Stanley Okama",
        "Email" => "sokama@yahoo.com",
        "phone" =>[
            "Mobile" => "+254716734566",
            "Cell" => "+254712000123",
            "work" => "+254792341111"
        ],
    ],
];

?>

<pre>
    <?php print_r($user_details); ?>
</pre>

