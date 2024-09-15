<?php
  namespace App\Models;

  class Listing {
    public static function all() {
      return [
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Neque habitant suspendisse ut natoque nulla rutrum platea massa. Hendrerit dignissim id mauris velit curae odio varius ipsum molestie. Ridiculus cursus eget tortor tempus nunc nibh efficitur himenaeos pretium.'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Neque habitant suspendisse ut natoque nulla rutrum platea massa. Hendrerit dignissim id mauris velit curae odio varius ipsum molestie. Ridiculus cursus eget tortor tempus nunc nibh efficitur himenaeos pretium.'
        ]
      ];
    }

    public static function find($id) {
      $listings = self::all();

      foreach($listings as $listing) {
        if($listing['id'] == $id) {
          return $listing;
        }
      }
    }
  }