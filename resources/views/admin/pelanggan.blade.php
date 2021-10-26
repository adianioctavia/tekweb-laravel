<x-admin-layout>
    <x-slot name="header">
            {{ __('Pelanggan') }}
    </x-slot>
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
    
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Daftar Pelanggan
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead>
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nama Pelanggan</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nomor HP</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                @if ($item->hasRole('pelanggan'))
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{$item->name}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$item->email}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$item->pelanggan->no_hp}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$item->pelanggan->alamat}}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{$user->links()}}
            </main>
    </div>
    
</x-admin-layout>