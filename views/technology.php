<?php

$title = 'Technology';
$posts = [
    [
        'title' => 'Very good tahvel',
        'date' => 'September 22, 2026',
        'author' => 'Rainer Tahker',
        'body' => 'Eternal Blue'

    ],
    [
        'title' => 'Kas sellest piisab?',
        'date' => 'September 28, 2008',
        'author' => 'Rainer T',
        'body' => 'NotPetya'

    ],
    [
        'title' => 'AI is not the way',
        'date' => 'September 5, 2029',
        'author' => 'Futuristic Genius',
        'body' => 'WannaCry'

    ],
    [
        'title' => "I'm out of ideas",
        'date' => 'September 22, 2026',
        'author' => 'Minecraft',
        'body' => 'Timo: "Kuidas projektiga läheb" (päriselt praegu ütles, kui technology page teen)'

    ],
];

?>

<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">

    <div class="row g-5">
        <div class="col-md-8">
            <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
            <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
    </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>