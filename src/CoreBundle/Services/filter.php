<?php

namespace CoreBundle\Services;

class filter
{
    public function filterWork($post)
    {
        if($post['search'] == '0')
        {
            if($post['rated'] != 0)
                $post['rated'] = $post['rated'] * 2 - 2;

            $ArrayFilter = ['filter' => $post['filter'], 'genre' => $post['genre'],
                'years' => $post['years'], 'rated' => $post['rated']];

            $unsetKeys = array_keys($ArrayFilter, '0');

            foreach($unsetKeys as $elem)
                unset($ArrayFilter[$elem]);

            return $ArrayFilter;
        }
        else
        {
            $ArrayFilter = ['search' => $post['search']];
            return $ArrayFilter;
        }
    }

}
