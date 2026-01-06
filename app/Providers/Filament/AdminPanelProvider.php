<?php

namespace App\Providers\Filament;

use App\Filament\Resources\ColorSettings\ColorSettingResource;
use App\Filament\Resources\Profils\ProfilResource;
use App\Models\profil;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->sidebarCollapsibleOnDesktop()
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            
            ->navigation(function (NavigationBuilder $builder) : NavigationBuilder {
                return $builder->groups([
                    NavigationGroup::make()
                        ->items([
                            NavigationItem::make('Dashboard')
                                ->icon('heroicon-s-home')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.pages.dashboard'))
                                ->url(fn(): string => Dashboard::getUrl()),

                            NavigationItem::make('Profil')
                                ->icon('heroicon-s-users')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.profils.*'))
                                ->url(fn(): string => ProfilResource::getUrl()),

                        ]),
                    NavigationGroup::make('Settings')
                        ->items([
                            NavigationItem::make('Color Setting')
                            ->icon('heroicon-s-adjustments-horizontal')
                            ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.resources.color-settings.*'))
                            ->url(fn(): string => ColorSettingResource::getUrl()),
                        ]),
                ]);
            })

            ->authMiddleware([
                Authenticate::class,
            ]);
            
    }
}
