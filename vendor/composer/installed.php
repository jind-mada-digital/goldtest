<?php return array(
    'root' => array(
        'name' => 'october/october',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'd4b268f10fdf5d55204f2558816aeb6a0c9cd7e5',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'october/october' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'd4b268f10fdf5d55204f2558816aeb6a0c9cd7e5',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
