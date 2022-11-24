<?php

use Doctum\RemoteRepository\GitHubRemoteRepository;
// use Doctum\RemoteRepository\GitVersionCollection;

$directory = __DIR__ . '/src';

// // generate documentation for all v2.0.* tags, the 2.0 branch, and the main one
// $versions = GitVersionCollection::create($directory)
//     // In a non case-sensitive way, tags containing "PR", "RC", "BETA" and "ALPHA" will be filtered out
//     // To change this, use: `$versions->setFilter(static function (string $version): bool { // ... });`
//     ->addFromTags('v2.0.*')
//     ->add('2.0', '2.0 branch')
//     ->add('main', 'main branch');

return new \Doctum\Doctum($directory, [
    'title'                => 'TXN Contracts API Documentation',
    'source_dir'           => dirname($directory) . '/',
    'remote_repository'    => new GitHubRemoteRepository('drewlabs/txn-contracts', dirname($directory)),
    'footer_link'          => [
        'href'        => 'https://github.com/azandrew-sidoine/php-txn-contracts',
        'rel'         => 'noreferrer noopener',
        'target'      => '_blank',
        'before_text' => 'You can edit the configuration',
        'link_text'   => 'on this', // Required if the href key is set
        'after_text'  => 'repository',
    ],
]);