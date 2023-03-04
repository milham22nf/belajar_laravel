<?php

namespace App\Models;

class post
{
    static $blog_post = [
        [
            [
                "title" => "Post Pertama",
                "slug" => "Post-Pertama",
                "Author" => "ilham",
                "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus officiis quaerat temporibus esse sint modi doloremque consequuntur natus quo! Aliquam quam ea voluptates maxime ipsum qui! Eius commodi minima ullam ratione. Illo, similique at. Nam omnis incidunt aliquam neque quasi nostrum id consequatur ullam illum ratione, totam illo fuga rem facilis provident iste perspiciatis dolorum impedit similique culpa nisi voluptatem. Error vel labore veniam asperiores, maiores, repellendus suscipit placeat impedit voluptatem dolore possimus sequi sint perferendis consequatur molestiae neque quos.
                ",
            ],
            [
                "title" => "Post Kedua",
                "slug" => "Post-Kedua",
                "Author" => "falah",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi debitis ad quis repellendus molestiae eligendi molestias voluptatem. Atque dignissimos blanditiis saepe fugit maiores odio deserunt ab quaerat dolorum unde reprehenderit nemo, quos vel voluptate adipisci repellat, eveniet aperiam soluta consequuntur suscipit! Rerum incidunt eum omnis qui nesciunt obcaecati quos animi ex. Perspiciatis itaque recusandae nesciunt porro neque tempora quae sint at veritatis quidem velit iure, aspernatur, id dicta doloremque libero harum dolor cum repellat debitis, voluptate soluta! Corrupti ut eos, cumque accusantium a modi, cum fuga porro, minima quod nisi? Accusamus, exercitationem. Sunt odio magni veritatis maiores! Corporis, nisi ratione?",
            ],
        ],
    ];

    public static function all()
    {
        return collect (self :: $blog_post);
    }

    public static function find($slug)
    {
        $posts = static ::all();
        return $posts ->firstWhere ('slug', $slug);
    }
}
?>