<?php

$nav = [
    ["title" => "მთავარი", "url" => "index.php", "active" => true],
    ["title" => "ჩვენ შესახებ", "url" => "about.php", "active" => false],
    ["title" => "სერვისები", "url" => "treatment.php", "active" => false],
    ["title" => "ფსიქოლოგები", "url" => "doctor.php", "active" => false],
    ["title" => "შეფასებები", "url" => "testimonial.php", "active" => false],
    ["title" => "კონტაქტი", "url" => "contact.php", "active" => false]
];

$slider = [
    [
        "title" => "მენტალური ჯანმრთელობის",
        "highlight" => "ცენტრი",
        "text" => "აღმოაჩინე შინაგანი მშვიდობა და ემოციური ბალანსი. ჩვენი გუნდი მზად არის დაგეხმაროთ ნებისმიერი სირთულის გადალახვაში.",
        "img" => "images/slider-img-1.png",
        "button" => "დაგვიკავშირდით",
        "link" => "contact.php"
    ],
    [
        "title" => "აღმოაჩინე",
        "highlight" => "Self-care",
        "text" => "თვითზრუნვა არ არის ფუფუნება, ის აუცილებლობაა. ისწავლე საკუთარ ემოციებთან მოსმენა და მიეცი თავს უფლება, იყო პირველ ადგილზე.",
        "img" => "images/slider-img-2.jpg",
        "button" => "გაიგე მეტი",
        "link" => "about.php"
    ],
    [
        "title" => "სანდო და გამოცდილი",
        "highlight" => "გუნდი",
        "text" => "ჩვენი სპეციალისტები დაგეხმარებიან სტრესის, შფოთვისა და კრიზისული პერიოდების ეფექტურად მართვაში.",
        "img" => "images/slider-img-3.png",
        "button" => "ჩაეწერეთ ვიზიტზე",
        "link" => "contact.php"
    ]
];


$treatments = [
    [
        "id" => 1,
        "img" => "images/t1.jpg",
        "title" => "ინდივიდუალური თერაპია",
        "desc" => "პირადი კონსულტაციები მოზრდილებისთვის, რომლებიც მიმართულია სტრესის, შფოთვისა და დეპრესიის დაძლევისკენ.",
        "link" => "treatment.php?id=1"
    ],
    [
        "id" => 2,
        "img" => "images/t2.jpg",
        "title" => "წყვილთა კონსულტაცია",
        "desc" => "ურთიერთობების გაუმჯობესება, კრიზისული პერიოდების მართვა და ეფექტური კომუნიკაციის აღდგენა პარტნიორებს შორის.",
        "link" => "treatment.php?id=2"
    ],
    [
        "id" => 3,
        "img" => "images/t3.jpg",
        "title" => "ბავშვთა ფსიქოლოგია",
        "desc" => "მოზარდებისა და ბავშვების ემოციური, ქცევითი და შემეცნებითი განვითარების პროფესიონალური მხარდაჭერა.",
        "link" => "treatment.php?id=3"
    ],
    [
        "id" => 4,
        "img" => "images/t4.jpg",
        "title" => "ჯგუფური თერაპია",
        "desc" => "გამოცდილების გაზიარება და ფსიქოლოგიური მხარდაჭერა მსგავსი გამოწვევების მქონე ადამიანების ჯგუფში.",
        "link" => "treatment.php?id=4"
    ]
];

$doctors = [
    [
        "name" => "ნინო კაპანაძე",
        "spec" => "კლინიკური ფსიქოლოგი (CBT)",
        "img" => "images/team2.jpg",
        "facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"
    ],
    [
        "name" => "გიორგი ბერიძე",
        "spec" => "ფსიქოთერაპევტი",
        "img" => "images/team3.jpg",
        "facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"
    ],
    [
        "name" => "ანა ეფრემიძე",
        "spec" => "ფსიქოთერაპევტი",
        "img" => "images/team4.jpg",
        "facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"
    ],
    [
        "name" => "დავით ნაცვლიშვილი",
        "spec" => "ბავშვთა და მოზარდთა ექსპერტი",
        "img" => "images/team5.jpg",
        "facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"
    ],
    [
        "name" => "ანა მეგრელიძე",
        "spec" => "ბავშვთა და მოზარდთა ექსპერტი",
        "img" => "images/team1.jpg",
        "facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"
    ]
];

$testimonials = [
    [
        "name" => "მარიამ ბერიძე",
        "subtitle" => "პაციენტი",
        "text" => "ამ ცენტრში მიღებულმა თერაპიამ სრულიად შეცვალა ჩემი დამოკიდებულება სტრესის მიმართ. განსაკუთრებული მადლობა ჩემს ფსიქოლოგს პროფესიონალიზმისთვის."
    ]
];

$site = [
    "logo" => "images/logo.png",
    "address" => "თბილისი, ი. ჭავჭავაძის გამზირი 12",
    "phone" => "+995 555 12 34 56",
    "email" => "info@mentalhealth.ge",
    "social" => [
        "facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"
    ]
];

$links = [
    ["title" => "მთავარი", "url" => "index.php"],
    ["title" => "ჩვენ შესახებ", "url" => "about.php"],
    ["title" => "სერვისები", "url" => "treatment.php"],
    ["title" => "ფსიქოლოგები", "url" => "doctor.php"],
    ["title" => "შეფასებები", "url" => "testimonial.php"],
    ["title" => "კონტაქტი", "url" => "contact.php"]
];

$latest_posts = [
    ["img" => "images/post1.jpg", "text" => "როგორ ვმართოთ შფოთვა ყოველდღიურ ცხოვრებაში ეფექტურად"],
    ["img" => "images/post2.jpg", "text" => "ემოციური ინტელექტის როლი ჯანსაღი ურთიერთობების ჩამოყალიბებაში"]
];

$news = [
    ["img" => "images/post3.jpg", "text" => "უფასო ონლაინ ვებინარი მენტალურ ჯანმრთელობაზე ამ უქმეებზე"],
    ["img" => "images/post4.png", "text" => "ცენტრის განახლებული სამუშაო საათები და მიღების დღეები"]
];
