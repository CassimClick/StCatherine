<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    public function features()
    {
        return ['Wi-fi', 'Room Services', 'Laundry Services', 'Full Board Service'];
    }
    public function singleRoom($name)
    {
        switch ($name) {
            case 'twinBedroom':
                return (object) [
                    'title' => 'Twin Bedroom',
                    'images' => [
                        base_url() . '/assets/img/rooms/room-imgTw2.jpg',
                        base_url() . '/assets/img/rooms/room-imgTw3.jpg',
                        base_url() . '/assets/img/rooms/toilet1.jpg',
                        base_url() . '/assets/img/rooms/toilet2.jpg',

                    ],

                ];

                break;
            case 'doubleBedroom':
                return (object) [
                    'title' => 'Double Bedroom',
                    'images' => [

                        base_url() . '/assets/img/rooms/room-img-db1.jpg',
                        base_url() . '/assets/img/rooms/toilet1.jpg',
                        base_url() . '/assets/img/rooms/toilet2.jpg',

                    ],

                ];
                break;
            case 'tripleBedroom':
                return (object) [
                    'title' => 'Triple Bedroom',
                    'images' => [
                        base_url() . '/assets/img/rooms/room-imgTp5.jpg',
                        base_url() . '/assets/img/rooms/toilet1.jpg',
                        base_url() . '/assets/img/rooms/toilet2.jpg',
                    ],

                ];
                break;
            case 'familyRoom':
                return (object) [
                    'title' => 'Family Room',
                    'images' => [
                        base_url() . '/assets/img/rooms/room1.jpg',
                        base_url() . '/assets/img/rooms/toilet1.jpg',
                        base_url() . '/assets/img/rooms/toilet2.jpg',
                    ],

                ];

            default:
                # code...
                break;
        }

    }
}