<?php
namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use App\Models\PlayerProvider;
use App\Models\Provider;

trait PlayerProviderTrait
{
    public function providers()
    {
        return $this->belongsToMany('App\Models\Api', 'player_provider', 'player_id', 'provider_id');
    }

    public function cachedProviders()
    {
        $userPrimaryKey = $this->primaryKey;

        $cacheKey = 'providers_for_player_' . $this->$userPrimaryKey;
        // return Cache::tags('player_provider')->remember($cacheKey, Config::get('cache.ttl'), function () {
            return $this->providers()->get();
        // });
    }

    public function hasProvider($name, $requireAll = false)
    {
        \Log::info('hasProvider:'.$name);
        if (is_array($name)) {
            foreach ($name as $providerName) {
                $hasProvider = $this->hasProvider($providerName);

                if ($hasProvider && !$requireAll) {
                    return true;
                } elseif (!$hasProvider && $requireAll) {
                    return false;
                }
            }

            // If we've made it this far and $requireAll is FALSE, then NONE of the roles were found
            // If we've made it this far and $requireAll is TRUE, then ALL of the roles were found.
            // Return the value of $requireAll;
            return $requireAll;
        } else {
            foreach ($this->cachedProviders() as $provider) {
                if ($provider->api_name == $name) {
                    return true;
                }
            }
        }

        return false;
    }

    public function attachProvider($provider, $password, $user_id = 0)
    {
        if (is_object($provider)) {
            $provider = $provider->getKey();
        }

        if (is_array($provider)) {
            $provider = $provider['id'];
        }
        $this->providers()->attach($provider);
        $playerProvider = PlayerProvider::where('provider_id', $provider)->where('player_id', $this->id)->first();
        $playerProvider->save();
    }

    public function detachProvider($provider)
    {
        if (is_object($provider)) {
            $provider = $provider->getKey();
        }

        if (is_array($provider)) {
            $provider = $provider['id'];
        }

        $this->providers()->detach($provider);
    }

    /**
     * @param $providers
     */
    public function attachProviders($providers)
    {
        foreach ($providers as $provider) {
            $this->attachProvider($provider);
        }
    }

    public function detachProviders($providers = null)
    {
        if (!$providers) $providers = $this->providers()->get();
        foreach ($providers as $provider) {
            $this->detachRole($provider);
        }
    }
}

