<template>
    <div class="bg-white border-b border-gray-300 fixed top-0 w-full shadow">
        <div class="lg:container mx-auto p-4">
            <div class="grid- grid-cols-3 gap-4">

                <div class="col-span-1 min-w-[250px]">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img :src="fileLink('log.png')" class="w-12 h-12 rounded-full border-2 border-blue-400" alt="">
                            <span class="font-semibold text-xl pl-1">İsmail Erdogan</span>
                        </div>

                        <div class="relative inline-block text-left group">
                            <three-dots-icon class="w-6 h-6 cursor-pointer"></three-dots-icon>

                            <div class="origin-top-right absolute right-0 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 hidden group-hover:block">
                                <div class="py-1">
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 cursor-pointer">Profile</a>
                                    <a href=""  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 cursor-pointer">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md" @click="logout">Logout</button>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
import ThreeDotsIcon from "@/components/ThreeDotsIcon.vue";
    export default {
        name:'ChatApp',
        components: { ThreeDotsIcon},
        methods: {
            logout() {
                console.log('logout');
            },
            fileLink(file) {
                return 'http://127.0.0.1:8000/assets/' + file;
            }
        }
    }
</script>

<style scoped>

</style>