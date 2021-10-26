<x-admin-layout>
    <x-slot name="header">
            {{ __('Pembelian') }}
    </x-slot>
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
    
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Daftar Pembelian
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead>
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Id Pembelian</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nama Pelanggan</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nama Produk</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Tanggal Pembelian</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Jumlah Pembelian</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Ekspedisi</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Total Pembelian</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Alamat</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Smith</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Kursi Rotan</td>
                                    <td class="py-4 px-6 border-b border-grey-light">01/10/2021</td>
                                    <td class="py-4 px-6 border-b border-grey-light">2</td>
                                    <td class="py-4 px-6 border-b border-grey-light">JNE</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1.000.000</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Terkirim</td>
                                </tr>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Smith</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Kursi Rotan</td>
                                    <td class="py-4 px-6 border-b border-grey-light">01/10/2021</td>
                                    <td class="py-4 px-6 border-b border-grey-light">2</td>
                                    <td class="py-4 px-6 border-b border-grey-light">JNE</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1.000.000</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Terkirim</td>
                                </tr>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Smith</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Kursi Rotan</td>
                                    <td class="py-4 px-6 border-b border-grey-light">01/10/2021</td>
                                    <td class="py-4 px-6 border-b border-grey-light">2</td>
                                    <td class="py-4 px-6 border-b border-grey-light">JNE</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1.000.000</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Terkirim</td>
                                </tr>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Smith</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Kursi Rotan</td>
                                    <td class="py-4 px-6 border-b border-grey-light">01/10/2021</td>
                                    <td class="py-4 px-6 border-b border-grey-light">2</td>
                                    <td class="py-4 px-6 border-b border-grey-light">JNE</td>
                                    <td class="py-4 px-6 border-b border-grey-light">1.000.000</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Terkirim</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
    </div>
    
</x-admin-layout>