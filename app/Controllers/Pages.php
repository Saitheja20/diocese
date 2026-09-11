<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private array $pages = [
        'about-us' => ['Origins and Formation', 'About', 'legacy/About_us'],
        'history' => ['History of Warangal Diocese', 'About', 'legacy/history'],
        'bishop' => ['Bishop', 'About', 'legacy/Bishop'],
        'diocesan-curia' => ['Diocesan Curia', 'Administration', 'legacy/diocese_curia'],
        'college-consultors' => ['College of Consultors', 'Administration', 'legacy/College_Consultors'],
        'senate-members' => ['Senate Members', 'Administration', 'legacy/Senate_Members'],
        'committees' => ['Committees', 'Administration', 'legacy/Committees'],
        'commissions' => ['Commissions', 'Administration', 'legacy/Commissions'],
        'marriage-tribunal' => ['Marriage Tribunal', 'Administration', 'legacy/Marriage_tribunal'],
        'diocesan-priests' => ['Diocesan Priests Directory', 'Clergy', 'legacy/Diocesan_Priests'],
        'religious-priests' => ['Religious Priests Communities', 'Clergy', 'legacy/Religious_Priests'],
        'seminarians' => ['Seminarians', 'Clergy', 'legacy/Seminarians'],
        'necrology' => ['Necrology', 'Clergy', 'legacy/Necrology'],
        'birthday-calendar' => ['Birthday Calendar', 'Clergy', 'legacy/birthday_calender'],
        'parishes' => ['Parishes', 'Parishes & Institutions', 'legacy/parishes'],
        'diocesan-shrines' => ['Diocesan Shrines', 'Parishes & Institutions', 'legacy/Diocesan_Shrines'],
        'education' => ['Education Institutions', 'Parishes & Institutions', 'legacy/education'],
        'institutions' => ['Institutions', 'Parishes & Institutions', 'legacy/institutions'],
        'institute-men' => ['Institute Men', 'Parishes & Institutions', 'legacy/Institute_Men'],
        'institute-women' => ['Institute Women', 'Parishes & Institutions', 'legacy/Institute_Women'],
        'institute-seminaries' => ['Seminaries', 'Parishes & Institutions', 'legacy/Institute_Seminaries'],
        'newsletters' => ['Newsletters', 'Media', 'legacy/news-letters'],
        'photo-gallery' => ['Photo Gallery', 'Media', 'legacy/Photo_Gallery'],
        'gallery/jubilee-2025' => ['Inauguration of Jubilee 2025', 'Media', 'legacy/gallery/gallery_1'],
        'video-gallery' => ['Video Gallery', 'Media', 'legacy/Video_gallery'],
        'songs-gallery' => ['Songs Gallery', 'Media', 'legacy/song_gallery'],
    ];

    public function show(string $slug = ''): string
    {
        if (! isset($this->pages[$slug])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound($slug);
        }

        [$heading, $section, $legacyView] = $this->pages[$slug];

        return view('pages/legacy_page', [
            'title' => $heading . ' | Diocese of Warangal',
            'heading' => $heading,
            'section' => $section,
            'legacyView' => $legacyView,
        ]);
    }

    public function jubilee(): string
    {
        return $this->show('gallery/jubilee-2025');
    }
}
