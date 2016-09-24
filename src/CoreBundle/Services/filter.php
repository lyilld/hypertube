<?php

namespace CoreBundle\Services;

use CoreBundle\Repository\OMDbRepository;

class filter
{
  public function filterWork($post)
  {
    if($post['rated'] != 0)
      $post['rated'] = $post['rated'] * 2 - 2;

    $ArrayFilter = ['filter' => $post['filter'], 'genre' => $post['genre'],
                    'years' => $post['Years'], 'rated' => $post['rated']];

    $unsetKeys = array_keys($ArrayFilter, '0');

    foreach($unsetKeys as $elem)
      unset($ArrayFilter[$elem]);

    return $ArrayFilter;
  }

}
