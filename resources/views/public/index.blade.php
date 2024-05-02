@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

    <main>

        <section class="bg-fondoMainMobile md:bg-fondoMain bg-cover bg-center bg-no-repeat sm:w-full h-full pt-40 md:pt-32">
            <div class="flex flex-col lg:flex-row justify-between gap-10">
                <div class="basis-1/2 flex flex-col gap-5 px-5 md:pl-16 pt-16 pb-16 md:pb-0">
                    {{-- tipografia h1 --}}
                    <h1 class="font-grotesk text-text32 md:text-text64 leading-tight text-[#050A41]"><span
                            class="text-[#E15A29]">¡Nuestra pasión,</span> tu
                        transformación Digital! 🚀</h1>
                    <p class="font-montserrat font-medium text-text18 md:text-text20 text-[#3F4654]">Somos una empresa de
                        desarrollo web
                        joven y dinámica, especializada en transformar ideas en soluciones digitales excepcionales. En Mundo
                        Web, no solo construimos sitios web y aplicativos, sino que creamos experiencias digitales que
                        impulsan el éxito de nuestros clientes.</p>

                    <div class="pt-5">
                        <a href="#"
                            class="font-montserrat font-semibold text-white py-2 px-4 bg-[#303BE4] justify-center items-center gap-3 rounded-full inline-flex">
                            <span>Quiero mi web</span>

                            <div>
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="white" />
                                    <path
                                        d="M16.4583 15.0808L24.9803 15.0807M24.9803 15.0807L24.9803 23.4815M24.9803 15.0807L15.0808 24.9802"
                                        stroke="#303BE4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>

                    <div
                        class="text-text24 pt-10 gap-5 flex flex-row md:items-center justify-between md:justify-start pb-10">

                        <img src="{{ asset('images/img/imgMundoWeb/image_3.png') }}" alt="mundoweb" class="w-20">

                        <p class="font-grotesk uppercase text-text16 md:text-text24 font-medium"><span
                                class="text-[#E15A29] text-text16 md:text-text24">100+</span> Clientes digitalizados </p>

                    </div>


                </div>

                <div class="hidden basis-1/2 md:flex items-start justify-end">
                    <img src="{{ asset('images/img/imgMundoWeb/image_4.png') }}" alt="mundo web" class="">
                </div>
            </div>
        </section>

        <section class="bg-[#303BE4] py-10">

            <div class="w-11/12 mx-auto">
                <div class="swiper clientes z-[20]">
                    <div class="swiper-wrapper items-center justify-center ">
                        <div class="swiper-slide ">
                            <img src="{{ asset('images/img/imgMundoWeb/image_15.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/img/imgMundoWeb/image_16.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/img/imgMundoWeb/image_17.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/img/imgMundoWeb/image_18.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/img/imgMundoWeb/image_19.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/img/imgMundoWeb/image_20.png') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>


        </section>

        <section
            class="bg-fondoMainBiggerMobile md:bg-fondoMainBigger bg-cover bg-center bg-no-repeat sm:w-full h-full py-20">

            <div class="w-11/12 mx-auto grid grid-cols-1 lg:grid-cols-2">
                <div class="flex justify-center">
                    <img src="{{ asset('images/img/imgMundoWeb/image_5.png') }}" alt="mundo web">
                </div>

                <div class="flex flex-col justify-center gap-10">
                    <h2
                        class="text-[#050A41] font-grotesk text-text40 md:text-text48 leading-tight font-medium w-full lg:w-2/3">
                        ¿Listo para crear tu página <span class="text-[#E15A29]">web a medida?</span> </h2>
                    <p class="text-[#3F4654] text-text18 font-montserrat font-medium">Completa el formulario y crea
                        experiencias digitales que convierten visitantes en clientes leades</p>

                    <div>
                        <form action="#" class="flex flex-col gap-5">
                            <div>
                                <input type="text" placeholder="Nombre Completo"
                                    class="text-[#323BDC] font-montserrat w-full py-4 px-5 rounded-xl text-text16  placeholder-opacity-25 font-medium bg-white border-none">
                            </div>

                            <div class="flex flex-col md:flex-row md:justify-between gap-5 w-full">
                                <div class="w-full">
                                    <input type="email" placeholder="Correo Electrónico"
                                        class="text-[#323BDC] font-montserrat w-full py-4 px-5 rounded-xl text-text16 font-medium bg-white border-none">
                                </div>
                                <div class="w-full">
                                    <input type="tel" placeholder="Teléfono"
                                        class="text-[#323BDC] font-montserrat w-full py-4 px-5 rounded-xl text-text16 font-medium bg-white border-none">
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row md:justify-between gap-5 w-full">
                                <div class="w-full">
                                    <input type="text" placeholder="Empresa / Marca"
                                        class="text-[#323BDC] font-montserrat w-full py-4 px-5 rounded-xl text-text16 font-medium bg-white border-none">
                                </div>
                                <div class="w-full">
                                    <input type="text" placeholder="Link de Web (Opcional)"
                                        class="text-[#323BDC] font-montserrat w-full py-4 px-5 rounded-xl text-text16 font-medium bg-white border-none">
                                </div>
                            </div>


                            <div>
                                <input type="text" placeholder="Coméntanos sobre tu proyecto"
                                    class="text-[#323BDC] font-montserrat w-full py-4 px-5 rounded-xl text-text16  placeholder-opacity-50 font-medium border-none">
                            </div>
                        </form>
                    </div>


                    <div class="md:pt-10">
                        <a href="#"
                            class="font-montserrat font-semibold text-white py-3 px-4 bg-[#303BE4] justify-center items-center gap-3 rounded-full inline-flex text-text18">
                            <span>Solicitar Servicio</span>

                            <div>
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="white" />
                                    <path
                                        d="M16.4583 15.0808L24.9803 15.0807M24.9803 15.0807L24.9803 23.4815M24.9803 15.0807L15.0808 24.9802"
                                        stroke="#303BE4" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="w-11/12 mx-auto flex flex-col gap-10 md:gap-16 pt-10">
                <h2
                    class="text-[#050A41] font-grotesk  text-text32 md:text-text48 font-medium  w-full lg:w-4/12 leading-tight">
                    ¡Explora nuestras Maravillas <span class="text-[#E15A29]">Digitales!</span></h2>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-10">

                    {{-- ---- modal por imagenes --}}

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_6.png') }}" alt="hpi" class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_6.png') }}')">
                    </div>

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_7.png') }}" alt="hpi"
                            class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_7.png') }}')">
                    </div>

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_8.png') }}" alt="hpi"
                            class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_8.png') }}')">
                    </div>

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_9.png') }}" alt="hpi"
                            class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_9.png') }}')">
                    </div>

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_10.png') }}" alt="hpi"
                            class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_10.png') }}')">
                    </div>

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_11.png') }}" alt="hpi"
                            class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_11.png') }}')">
                    </div>

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_12.png') }}" alt="hpi"
                            class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_12.png') }}')">
                    </div>

                    <div
                        class="flex justify-center items-center md:hover:scale-110 md:duration-300 border-black border-[10px] rounded-xl">
                        <img src="{{ asset('images/img/imgMundoWeb/image_13.png') }}" alt="hpi"
                            class="w-full h-full"
                            onclick="openModal('{{ asset('images/img/imgMundoWeb/image_13.png') }}')">
                    </div>
                </div>

                <!-- Modal -->
                <div id="modal" class="modal hidden fixed inset-0 items-center justify-center">
                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                    <div class="modal-container bg-white w-5/6 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <div class="modal-content p-4 relative">
                            <span
                                class="close absolute top-0 right-0 mx-4 cursor-pointer text-black text-text48">&times;</span>
                            <img id="modalImage" src="" alt="Imagen" class="w-full h-auto">
                        </div>
                    </div>
                </div>


                {{-- ------ --}}

            </div>

            <div class="w-11/12 mx-auto bg-[#303BE4] rounded-2xl py-10  px-5 my-20">
                <div class="w-full md:w-6/12 mx-auto">
                    <h2 class="text-white font-medium text-text44 md:text-text64 text-center leading-tight font-grotesk">
                        ¡Impulsa tu presencia en linea con <span class="text-[#050A41]">Mundo Web!</span></h2>

                    <p class="font-montserrat text-text18 md:text-text20 leading-tight text-white text-center py-5">¡Mundo
                        Web tiene un modelo de trabajo que puede llevar tu presencia en lína al siguiente nivel...</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-14 md:px-10 lg:px-20">
                    <div
                        class="text-white flex gap-2 group bg-white bg-opacity-10 justify-between rounded-xl px-5 py-10 md:p-10 ">
                        <div class="flex flex-col gap-5 basis-10/12">
                            <h2 class="font-grotesk font-medium text-text32 leading-tight ">Aumento de Conversiones</h2>
                            <p class="text-text18  font-montserrat font-medium">Diseñamos páginas que inspiran acción y
                                aumentan las conversiones.</p>
                        </div>
                        <div
                            class="opacity-0  md:duration-300 basis-2/12 flex justify-end items-start group-hover:opacity-100">
                            <img src="{{ asset('images/img/imgMundoWeb/image_30.png') }}" alt="mundo web"
                                class="w-8 h-8">
                        </div>

                    </div>

                    <div
                        class="text-white flex gap-2 group bg-white bg-opacity-10 justify-between rounded-xl px-5 py-10 md:p-10 ">
                        <div class="flex flex-col gap-5 basis-10/12">
                            <h2 class="font-grotesk font-medium text-text32 leading-tight ">Generación de Leads de Calidad
                            </h2>
                            <p class="text-text18  font-montserrat font-medium">Capturamos datos clave para impulsar
                                relaciones significativas con los clientes.</p>
                        </div>
                        <div
                            class="opacity-0  md:duration-300 basis-2/12 flex justify-end items-start group-hover:opacity-100">
                            <img src="{{ asset('images/img/imgMundoWeb/image_30.png') }}" alt="mundo web"
                                class="w-8 h-8">
                        </div>
                    </div>


                    <div
                        class="text-white flex gap-2 group bg-white bg-opacity-10 justify-between rounded-xl px-5 py-10 md:p-10 ">
                        <div class="flex flex-col gap-5 basis-10/12">
                            <h2 class="font-grotesk font-medium text-text32 leading-tight ">Mayor Credibilidad y
                                Profesionalismo</h2>
                            <p class="text-text18  font-montserrat font-medium">Transmitimos profesionalismo y confianza
                                para destacar tu marca.</p>
                        </div>
                        <div
                            class="opacity-0  md:duration-300 basis-2/12 flex justify-end items-start group-hover:opacity-100">
                            <img src="{{ asset('images/img/imgMundoWeb/image_30.png') }}" alt="mundo web"
                                class="w-8 h-8">
                        </div>
                    </div>

                    <div
                        class="text-white flex gap-2 group bg-white bg-opacity-10 justify-between rounded-xl px-5 py-10 md:p-10 ">
                        <div class="flex flex-col gap-5 basis-10/12">
                            <h2 class="font-grotesk font-medium text-text32 leading-tight ">Optimización para Dispositivos
                                Móviles</h2>
                            <p class="text-text18  font-montserrat font-medium">Garantizamos una experiencia excepcional en
                                todos los dispositivos.</p>
                        </div>
                        <div
                            class="opacity-0  md:duration-300 basis-2/12 flex justify-end items-start group-hover:opacity-100">
                            <img src="{{ asset('images/img/imgMundoWeb/image_30.png') }}" alt="mundo web"
                                class="w-8 h-8">
                        </div>
                    </div>


                </div>

                <div class="pt-5 flex justify-between w-full">
                    <div class="w-full flex justify-center">
                        <a href="#"
                            class="font-montserrat font-semibold text-white py-2 px-4 bg-white bg-opacity-10 justify-center items-center gap-3 rounded-full inline-flex text-center">
                            <span>Quiero mi web</span>

                            <div>
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="white" />
                                    <path
                                        d="M16.4583 15.0808L24.9803 15.0807M24.9803 15.0807L24.9803 23.4815M24.9803 15.0807L15.0808 24.9802"
                                        stroke="#303BE4" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section>


    </main>


@section('scripts_importados')
    <script>
        var especialidades = new Swiper(".clientes", {
            slidesPerView: 6,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            allowTouchMove: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 6,
                },
            },
        });


        // Función para abrir el modal con una imagen específica
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modal').classList.add('flex');
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('modal').classList.remove('flex');
            document.getElementById('modal').classList.add('hidden');
        }

        // Cerrar modal al hacer clic en el botón de cierre
        const closeButtons = document.querySelectorAll('.close');
        closeButtons.forEach(button => {
            button.addEventListener('click', () => {
                closeModal();
            });
        });
    </script>
@stop

@stop
