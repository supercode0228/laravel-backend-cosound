<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Models\User;

class UserTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(User $user)
    {   
        return [
            'id' => $user->id,
            'email' => $user->email,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'type' => $user->type,
            'artist_name' => $user->artist_name,
            'bio' => $user->bio,
            'dob' => $user->dob,
            'genres' => $user->genres,    
            'address' => $user->address,
            'latitude' => $user->latitude,
            'longitude' => $user->longitude,
            'postal_code' => $user->postal_code,
            'phone_numbers' => $user->phone_numbers,
            'social_links' => $user->social_links,
            'avatar' => $user->avatar,
            'thumbnail' => $user->thumbnail,
            'followers_count' => $user->followersCount,
            'isConfirmed' => $user->isConfirmed,
            'is_admin' => $user->admin,
        ];
    }
}