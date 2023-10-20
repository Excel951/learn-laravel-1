<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'author',
        'excerpt',
        'body',
    ];
}

// [
    // Post::create([
    //     'category_id' => 1,
    //     'title' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    //     'slug' => 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit',
    //     'author' => 'Deo',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit quisquam quas ex iusto voluptates perspiciatis assumenda cum, ...',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit quisquam quas ex iusto voluptates perspiciatis assumenda cum, rerum dolores alias possimus tenetur minima in dignissimos dolorem aliquam vero! Facilis sit, culpa facere natus, tenetur, ut accusamus iste quo ad rem nisi enim saepe possimus odit! Doloribus eaque blanditiis eos nesciunt!</p>'
    // ])
    // Post::create([
    //     'category_id' => 2,
    //     'title' => 'Blog 2',
    //     'slug' => 'blog-2',
    //     'author' => 'Edo',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit amet facilis architecto maxime molestiae, inventore, nulla quod...',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit amet facilis architecto maxime molestiae, inventore, nulla quod quo vero cum dicta numquam quia eum nemo rerum culpa eius. Nisi rem officiis perspiciatis maxime ipsam, voluptatum cumque!</p><p>Possimus dolores beatae officiis sed, unde nisi sequi similique enim fugit at pariatur optio ut dolore dignissimos veritatis recusandae error minima quasi in quidem. Minima nesciunt velit illum dolores earum laboriosam, commodi, aspernatur blanditiis reprehenderit voluptas, magni eius vero hic. Iusto, deserunt?</p><p>Cum iure labore in debitis beatae incidunt, obcaecati, dolore, tempore officiis explicabo porro atque provident. Accusantium placeat quis eligendi sit amet.</p>'
    // ]);
// ];