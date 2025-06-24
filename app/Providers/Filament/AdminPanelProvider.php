<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->passwordReset()
            ->profile()
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
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
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                $user = Auth::user();
                if (!$user) return $builder;

                $groups = [];

                // Semua user dapat Dashboard
                $groups[] = NavigationGroup::make()->items([
                    NavigationItem::make('Dashboard')
                        ->icon('heroicon-o-home')
                        ->url(route('filament.admin.pages.dashboard'))
                        ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.pages.dashboard')),
                ]);

                if ($user->role === 'admin') {
                    $groups[] = NavigationGroup::make('Manajemen')->items([
                        NavigationItem::make('User')
                            ->icon('heroicon-o-users')
                            ->url(route('filament.admin.resources.users.index')),
                        NavigationItem::make('Pegawai')
                            ->icon('heroicon-o-identification')
                            ->url(route('filament.admin.resources.pegawais.index')),
                        NavigationItem::make('Divisi')
                            ->icon('heroicon-o-user-group')
                            ->url(route('filament.admin.resources.divisis.index')),
                    ]);
                    $groups[] = NavigationGroup::make('Cuti')->items([
                        NavigationItem::make('Jatah Cuti')
                            ->icon('heroicon-o-calendar')
                            ->url(route('filament.admin.resources.jatah-cutis.index')),
                        NavigationItem::make('Pengajuan Cuti')
                            ->icon('heroicon-o-document')
                            ->url(route('filament.admin.resources.pengajuan-cutis.index')),
                    ]);
                } elseif ($user->role === 'HRD') {
                    $groups[] = NavigationGroup::make('Data Pegawai')->items([
                        NavigationItem::make('Pegawai')
                            ->icon('heroicon-o-identification')
                            ->url(route('filament.admin.resources.pegawais.index')),
                    ]);
                    $groups[] = NavigationGroup::make('Cuti')->items([
                        NavigationItem::make('Jatah Cuti')
                            ->icon('heroicon-o-calendar')
                            ->url(route('filament.admin.resources.jatah-cutis.index')),
                        NavigationItem::make('Pengajuan Cuti')
                            ->icon('heroicon-o-document')
                            ->url(route('filament.admin.resources.pengajuan-cutis.index')),
                    ]);
                } elseif ($user->role === 'manager') {
                    $groups[] = NavigationGroup::make('Divisi & Pegawai')->items([
                        NavigationItem::make('Divisi')
                            ->icon('heroicon-o-user-group')
                            ->url(route('filament.admin.resources.divisis.index')),
                        NavigationItem::make('Pegawai')
                            ->icon('heroicon-o-identification')
                            ->url(route('filament.admin.resources.pegawais.index')),
                    ]);
                    $groups[] = NavigationGroup::make('Approval')->items([
                        NavigationItem::make('Pengajuan Cuti')
                            ->icon('heroicon-o-document-check')
                            ->url(route('filament.admin.resources.pengajuan-cutis.index')),
                    ]);
                } elseif ($user->role === 'pegawai') {
                    $groups[] = NavigationGroup::make('Pengajuan Saya')->items([
                        NavigationItem::make('Pengajuan Cuti')
                            ->icon('heroicon-o-document')
                            ->url(route('filament.admin.resources.pengajuan-cutis.index')),
                    ]);
                }

                return $builder->groups($groups);
            });
    }
}
