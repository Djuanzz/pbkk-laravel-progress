<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'title' => 'Artikel 1',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum fugit rem sint similique at dolores beatae possimus enim, sit quasi iure! Sequi consectetur debitis ullam adipisci quidem magnam ratione iure eligendi obcaecati cupiditate, unde aspernatur aut nisi, qui eum modi, error rerum exercitationem facere rem! Tenetur eligendi, provident recusandae est, ullam iusto ipsam tempore facere officiis nostrum explicabo laborum officia odio dolor atque vel nihil? Veritatis perspiciatis tenetur exercitationem ab voluptatibus optio sapiente distinctio delectus tempore officiis neque error voluptates sit ducimus, dolores enim ex quidem dolore cupiditate. Praesentium aliquam id ad esse corrupti laudantium nulla non, vel dolore repellendus, quibusdam debitis temporibus ab delectus tempora sequi animi fugit. Totam ratione consectetur corporis. Reiciendis repellendus aperiam voluptatem. Nostrum veniam aspernatur laboriosam officiis, iusto consequatur iste quae minima est sapiente perferendis ullam molestias quam assumenda aut odio deleniti. Eligendi fugiat inventore nobis quisquam eaque sint. Excepturi enim consectetur laborum quasi dolorem iste dicta modi nemo id doloribus neque sunt, quibusdam dolorum non, ducimus a ut voluptates fugiat. Laboriosam animi reiciendis repellat? Nobis delectus minima sed doloremque dolor velit enim molestias, et error esse distinctio dolores incidunt modi natus accusamus odio nam. Amet expedita quasi cupiditate minus aspernatur provident nisi quo voluptatibus dolor! Quas minima harum, delectus id accusamus saepe voluptatem suscipit sequi magni eligendi facere corrupti, nihil, repellendus repudiandae illum labore pariatur iusto aliquam rem. Quia commodi ea eligendi nulla iusto atque tenetur amet delectus veritatis voluptates earum, voluptatibus voluptatem consectetur temporibus illum non obcaecati sunt nemo. Soluta, recusandae aliquid!
'
        ],
        [   
            'id' => 2,
            'title' => 'Artikel 2',
            'author' => 'Jane Queen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem consectetur odio beatae neque autem a possimus, odit impedit, placeat ipsum sit fuga officiis, cumque est excepturi labore doloribus perspiciatis rem provident similique? Et quas aperiam laudantium dicta autem culpa, cupiditate odio consequatur minus libero quidem dignissimos. Maxime tempora quasi perferendis dolorum sint ipsa veritatis, culpa sequi odio quae dolore laboriosam suscipit vero blanditiis? Autem fugiat numquam voluptatem consectetur. Officia nihil incidunt delectus tempora similique! Alias totam ipsum sint itaque beatae iste. Quis odio omnis laboriosam corporis reiciendis nihil suscipit repellendus praesentium voluptas ipsum voluptate officiis, consectetur libero odit non provident, iste deleniti veniam, quo corrupti vitae iusto eos? Doloribus totam assumenda voluptates animi cupiditate ex perspiciatis eaque dolores dicta magnam dignissimos nulla ut esse ducimus nam tempore tempora, blanditiis, sequi odio maxime pariatur inventore autem dolore quisquam. Ratione aspernatur iure nisi autem facilis incidunt consequatur. Iure, rem at iusto exercitationem earum odio optio, ad, nemo architecto labore sint? Fugiat praesentium, aliquid maxime voluptatibus corrupti enim impedit doloremque similique? Earum inventore sint, eum deserunt optio illo maiores nulla ducimus animi asperiores aut qui veritatis, ipsam esse a laborum perferendis labore velit iure? Praesentium at cumque quibusdam eveniet odio impedit ullam? Pariatur a ut eaque rem laudantium alias maxime! Porro earum eum odit esse tempora. Enim at velit sequi impedit magni, possimus saepe voluptatum dolorum sed odit esse officiis ut reprehenderit similique facere doloremque corporis expedita, aut, quos distinctio doloribus? Doloremque iusto voluptatibus laboriosam, nobis id atque placeat ipsa vel provident ex!'
        ]
    ]]);
});

Route::get('/posts/{id}', function($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Artikel 1',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum fugit rem sint similique at dolores beatae possimus enim, sit quasi iure! Sequi consectetur debitis ullam adipisci quidem magnam ratione iure eligendi obcaecati cupiditate, unde aspernatur aut nisi, qui eum modi, error rerum exercitationem facere rem! Tenetur eligendi, provident recusandae est, ullam iusto ipsam tempore facere officiis nostrum explicabo laborum officia odio dolor atque vel nihil? Veritatis perspiciatis tenetur exercitationem ab voluptatibus optio sapiente distinctio delectus tempore officiis neque error voluptates sit ducimus, dolores enim ex quidem dolore cupiditate. Praesentium aliquam id ad esse corrupti laudantium nulla non, vel dolore repellendus, quibusdam debitis temporibus ab delectus tempora sequi animi fugit. Totam ratione consectetur corporis. Reiciendis repellendus aperiam voluptatem. Nostrum veniam aspernatur laboriosam officiis, iusto consequatur iste quae minima est sapiente perferendis ullam molestias quam assumenda aut odio deleniti. Eligendi fugiat inventore nobis quisquam eaque sint. Excepturi enim consectetur laborum quasi dolorem iste dicta modi nemo id doloribus neque sunt, quibusdam dolorum non, ducimus a ut voluptates fugiat. Laboriosam animi reiciendis repellat? Nobis delectus minima sed doloremque dolor velit enim molestias, et error esse distinctio dolores incidunt modi natus accusamus odio nam. Amet expedita quasi cupiditate minus aspernatur provident nisi quo voluptatibus dolor! Quas minima harum, delectus id accusamus saepe voluptatem suscipit sequi magni eligendi facere corrupti, nihil, repellendus repudiandae illum labore pariatur iusto aliquam rem. Quia commodi ea eligendi nulla iusto atque tenetur amet delectus veritatis voluptates earum, voluptatibus voluptatem consectetur temporibus illum non obcaecati sunt nemo. Soluta, recusandae aliquid!
'
        ],
        [   
            'id' => 2,
            'title' => 'Artikel 2',
            'author' => 'Jane Queen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem consectetur odio beatae neque autem a possimus, odit impedit, placeat ipsum sit fuga officiis, cumque est excepturi labore doloribus perspiciatis rem provident similique? Et quas aperiam laudantium dicta autem culpa, cupiditate odio consequatur minus libero quidem dignissimos. Maxime tempora quasi perferendis dolorum sint ipsa veritatis, culpa sequi odio quae dolore laboriosam suscipit vero blanditiis? Autem fugiat numquam voluptatem consectetur. Officia nihil incidunt delectus tempora similique! Alias totam ipsum sint itaque beatae iste. Quis odio omnis laboriosam corporis reiciendis nihil suscipit repellendus praesentium voluptas ipsum voluptate officiis, consectetur libero odit non provident, iste deleniti veniam, quo corrupti vitae iusto eos? Doloribus totam assumenda voluptates animi cupiditate ex perspiciatis eaque dolores dicta magnam dignissimos nulla ut esse ducimus nam tempore tempora, blanditiis, sequi odio maxime pariatur inventore autem dolore quisquam. Ratione aspernatur iure nisi autem facilis incidunt consequatur. Iure, rem at iusto exercitationem earum odio optio, ad, nemo architecto labore sint? Fugiat praesentium, aliquid maxime voluptatibus corrupti enim impedit doloremque similique? Earum inventore sint, eum deserunt optio illo maiores nulla ducimus animi asperiores aut qui veritatis, ipsam esse a laborum perferendis labore velit iure? Praesentium at cumque quibusdam eveniet odio impedit ullam? Pariatur a ut eaque rem laudantium alias maxime! Porro earum eum odit esse tempora. Enim at velit sequi impedit magni, possimus saepe voluptatum dolorum sed odit esse officiis ut reprehenderit similique facere doloremque corporis expedita, aut, quos distinctio doloribus? Doloremque iusto voluptatibus laboriosam, nobis id atque placeat ipsa vel provident ex!'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post Page', 'post' => $post]);

});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/login', function () {
     echo "okoko";
})->name('login');