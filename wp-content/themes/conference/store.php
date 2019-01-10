<?php
$app_title = 'Conference';
$data = '21.12.18';
$time = '18:00';
$place = 'г.Киев, ул. Михаила Грушевского, 26/1';

$for_who = [
	'title' => 'Для кого эта конференция?',
	'image' => '../../images/content/for-who/for-who-item-1.jpg',
	'list' => '
	<ul class="custom-list list-unstyled">
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
		<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
		<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</li>
		<li>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</li>
		<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li><li>Riad minim venia ercitation ullamco laboris</li>
	</ul>',
];
$program = [
    'title' => 'Программа',
	'times' => ['21 декабря', '22 декабря' , '23 декабря'],
	'items' => [
		[
			[   
				'time' => '21 декабря 2018 18:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architeo. Tab illo inventore veritatis et quasi architeo.',
			],
			[   
				'time' => '21 декабря 2018 19:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem perspiciatis unde omnis iste natus  ab illo inventore veritatis et quasi architeo. error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.',
			],
			[   
				'time' => '21 декабря 2018 20:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem perspiciatis unde omnis iste  ab illo inventore veritatis et quasi architeo. ab illo inventore veritatis et quasi architeo. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae. ',
			],
			[   
				'time' => '21 декабря 2018 21:00',
				'text' => 'Eaque ipsa quae ab illo inventore veritatis et quasi architecto ab illo inventore veritatis et quasi architeo beatae vitae.',
			],
			[   
				'time' => '21 декабря 2018 21:00',
				'text' => 'Eaque ipsa quae ab illo inventore veritatis et quasi architecto ab illo inventore veritatis et quasi architeo beatae vitae.',
			],
		],
		[
			[   
				'time' => '22 декабря 2018 18:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem perspiciatis unde omnis iste natus  ab illo inventore veritatis et quasi architeo. error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae. ',
			],
			[   
				'time' => '22 декабря 2018 19:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architeo. Tab illo inventore veritatis et quasi architeo.',
			],
			[   
				'time' => '22 декабря 2018 20:00',
				'text' => 'Eaque ipsa quae ab illo inventore veritatis et quasi architecto ab illo inventore veritatis et quasi architeo beatae vitae.',
			],
			[   
				'time' => '22 декабря 2018 21:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem perspiciatis unde omnis iste  ab illo inventore veritatis et quasi architeo. ab illo inventore veritatis et quasi architeo. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae. ',
			],
		],
		[
			[   
				'time' => '23 декабря 2018 18:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architeo. Tab illo inventore veritatis et quasi architeo.',
			],
			[   
				'time' => '23 декабря 2018 19:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem perspiciatis unde omnis iste  ab illo inventore veritatis et quasi architeo. ab illo inventore veritatis et quasi architeo. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae. ',
			],
			[   
				'time' => '23 декабря 2018 20:00',
				'text' => 'Eaque ipsa quae ab illo inventore veritatis et quasi architecto ab illo inventore veritatis et quasi architeo beatae vitae.',
			],
			[   
				'time' => '23 декабря 2018 21:00',
				'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem perspiciatis unde omnis iste natus  ab illo inventore veritatis et quasi architeo. error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae. ',
			],
		],
	],
];
$speakers = [
	'title' => 'Наши спикеры',
	'items' =>  [
		[   
            'image' => '../../images/content/speakers/speakers-item-1.jpg',
            'name' => 'Елена Самсонава',
			'position' => 'Косметолог международной ассоциации ',
		],
		[   
            'image' => '../../images/content/speakers/speakers-item-2.jpg',
            'name' => 'Валерия Николайченко-Белик',
			'position' => 'Косметолог международной ассоциации IALPE. Имеет высшие медицинское образование и 10-тилетний опыт.',
		],
		[   
            'image' => '../../images/content/speakers/speakers-item-2.jpg',
            'name' => 'Lorem Ipsum',
			'position' => 'Sed ut perspiciatis unde omnis iste natus error ipsa quae ab illo inventore veritatis architecto ab illo inventore veritatis et quasi',
		],
		[   
            'image' => '../../images/content/speakers/speakers-item-1.jpg',
            'name' => 'Lorem Ipsum',
			'position' => 'Perspiciatis unde omnis iste natus perspiciatis unde omnis iste natus error ',
		],
		[   
            'image' => '../../images/content/speakers/speakers-item-1.jpg',
            'name' => 'Lorem Ipsum',
			'position' => 'Sed ut perspiciatis unde omnis iste natus error',
		]
	],
];
$singup = [
    'title' => 'Записаться на конференцию',
    'price' => '$99'
];
$contacts = [
	'title' => 'Контакты',
	'items' => [
		[	
			'name' => 'phone',
			'info' => '+380 99 777 55 99',
		],
		[	
			'name' => 'email',
			'info' => 'conference_cosmetology@gmail.com',
		],
		[	
			'name' => 'place',
			'info' => 'г.Киев, ул.Михаила Грушевского 215/2',
		],
	],
];