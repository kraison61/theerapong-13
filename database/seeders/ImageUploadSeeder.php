<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\ImageUpload;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ImageUploadSeeder extends Seeder
{
    // Curated Unsplash photo IDs — construction & civil engineering
    private array $constructionImages = [
        '1504307651254-35680f356dfd', // excavation / earthworks
        '1531834685032-c74464ae3c97', // concrete pouring
        '1517089596392-fb9a9033e05b', // masonry wall
        '1590674867551-11c3a2e92ec7', // heavy machinery
        '1541888946425-d81bb19480c5', // construction site overview
        '1503387762-592deb58ef4e',    // structure framing
        '1565008553300-5b9c0a6f8b8a', // road / asphalt
        '1582578958100-ddfb6b2c7c5a', // steel reinforcement rebar
        '1558618666-fcd25c85cd64',    // foundation / bored pile
        '1512917774080-9991f1c4c750', // industrial yard
    ];

    private array $locations = [
        'นนทบุรี', 'กรุงเทพฯ ตะวันออก', 'ปทุมธานี', 'สมุทรปราการ',
        'บางนา', 'ลาดกระบัง', 'มีนบุรี', 'ดอนเมือง', 'บางใหญ่', 'สุพรรณบุรี',
    ];

    public function run(): void
    {
        // 2 images per service
        foreach (Service::all() as $service) {
            foreach (array_slice($this->shuffle(), 0, 2) as $photoId) {
                ImageUpload::create([
                    'imageable_id'   => $service->id,
                    'imageable_type' => Service::class,
                    'img_url'        => $this->url($photoId),
                    'location'       => $this->randomLocation(),
                    'worked_date'    => now()->subMonths(rand(1, 18)),
                ]);
            }
        }

        // 3 images per portfolio
        foreach (Portfolio::all() as $portfolio) {
            foreach (array_slice($this->shuffle(), 0, 3) as $photoId) {
                ImageUpload::create([
                    'imageable_id'   => $portfolio->id,
                    'imageable_type' => Portfolio::class,
                    'img_url'        => $this->url($photoId),
                    'location'       => $portfolio->location ?? $this->randomLocation(),
                    'worked_date'    => $portfolio->completion_date,
                ]);
            }
        }

        // 1 image per blog
        foreach (Blog::all() as $blog) {
            ImageUpload::create([
                'imageable_id'   => $blog->id,
                'imageable_type' => Blog::class,
                'img_url'        => $this->url($this->randomPhoto()),
                'worked_date'    => $blog->created_at,
            ]);
        }

        // 2 images per project
        foreach (Project::all() as $project) {
            foreach (array_slice($this->shuffle(), 0, 2) as $photoId) {
                ImageUpload::create([
                    'imageable_id'   => $project->id,
                    'imageable_type' => Project::class,
                    'img_url'        => $this->url($photoId),
                    'location'       => $this->randomLocation(),
                    'worked_date'    => now()->subMonths(rand(1, 24)),
                ]);
            }
        }
    }

    private function url(string $id, int $w = 1000): string
    {
        return "https://images.unsplash.com/photo-{$id}?w={$w}&q=80&auto=format&fit=crop";
    }

    private function shuffle(): array
    {
        $arr = $this->constructionImages;
        shuffle($arr);
        return $arr;
    }

    private function randomPhoto(): string
    {
        return $this->constructionImages[array_rand($this->constructionImages)];
    }

    private function randomLocation(): string
    {
        return $this->locations[array_rand($this->locations)];
    }
}
