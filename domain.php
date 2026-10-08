<?php
domain::add('biz', __DIR__, domain::SkipList, new domain([
		'folder' => 'biz/',
		'heading' => 'Businesses @ DAWN',
		'local' => 'http://localhost/biz/%subfol%/%site%/',
		'live' => 'https://%site%.biz.amadeusweb.in/',
		'local-base' => 'http://localhost/biz/%subfol%/',
		'live-base' => 'https://%subfol%.biz.amadeusweb.in/',
	],
	['%folder%www'],
	[
		'~Industry',
		'transportation',
		'information-technology',
		'service',
		'~Shops',
		'appliances',
		'devices',
		'electronics',
		'time-keeping',
		'~Places',
		'rattan-bazaar',
	],
));
