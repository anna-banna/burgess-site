<?php
$page_css = [
    '/styles/animations.css',
    '/styles/portfolio.css',
];
include 'includes/header.php';
?>

<main id="main">
    <!-- Landing -->
    <section id="portfolio-landing">
        <div class="container">
            <h1 data-aos="fade-up">Our Projects</h1>
            <p data-aos="fade-up" data-aos-delay="50">
                From industrial facilities to commercial spaces, explore our legacy of excellence in mechanical contracting and construction projects across the United States.
            </p>
        </div>
    </section>

    <!-- Filters -->
    <section id="filters">
        <div class="container">
            <div class="filter-wrapper" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="industrial">Industrial</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="government">Government</button>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <!-- The Yard -->
            <div class="project-card main-card full-width industrial">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/theyard1.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard2.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard3.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard4.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard5.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard6.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard7.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard8.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard9.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard10.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard11.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/theyard12.jpeg" alt="the yard industrial park" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">19</span>
                    </div>
                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>The Yard Industrial Park</h2>
                    <p>
                        The Yard Industrial Park is a transformative project spanning 40 acres along Wilmington's Highway 421 industrial corridor, designed to host multiple commercial and industrial tenants. Situated with rail access and waterfront connectivity to the Cape Fear River, the project is being executed in phases. Key elements include the unassembly and relocation of an old car crusher, the renovation of a 115,000-square-foot warehouse, the reconstruction of rail access into the property, and the refurbishment of smaller buildings. The development also involves significant civil stormwater mitigation, environmental remediation, the construction of new proposed buildings, and the creation of a modern road network to connect and enhance the property’s infrastructure. This ambitious endeavor is redefining the site as a hub of industrial activity and growth.
                    </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Wilmington, North Carolina</span>
                        <span class="detail"><strong>Completion:</strong> In progress</span>
                    </div>
                </div>
            </div>

            <!-- Safelite -->
            <div class="project-card commercial" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/safelite2.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <video autoplay muted loop playsinline preload="metadata">
                                <source src="/images/safelitevid.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/safelite3.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/safelite4.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">4</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Futch Creek Safelite</h2>
                    <p>
                        Burgess Group partnered with Tripp Engineering for civil design and Becker Morgan Group for architectural work in the development of the Safelite Auto Glass facility on Futch Creek Road in Wilmington, NC. The project encompassed a comprehensive design and construction process, including tree mitigation efforts, utility connections for water, sewer, and electricity, and full building construction and upfit. This collaboration ensured a seamless integration of civil, architectural, and construction elements to deliver a fully operational facility tailored to Safelite’s needs.
                    </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Wilmington, North Carolina</span>
                        <span class="detail"><strong>Completion:</strong> 2024</span>
                    </div>
                </div>
            </div>

            <!-- Port Authority -->
            <div class="project-card industrial" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/port1.jpg" alt="port" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/port2.jpg" alt="port" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/port3.jpg" alt="port" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/port4.jpg" alt="port" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/port5.jpg" alt="port" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/port6.jpg" alt="port" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">6</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>NC Port of Wilmington Relocation of Liquid Bulk Pier</h2>
                    <p>
                        The relocation of the Liquid Bulk Pier was a turnkey project that involved the removal of 300 feet of the existing Kinder Morgan concrete pier, loading platform, three breasting dolphins, a fire waterline, and associated controls and power wiring. The new construction included an 800-foot, two-tiered concrete and steel bridge supported by steel pilings, spanning the Cape Fear River to connect with Port Authority Berth-1. Additionally, a 300-foot elevated pipe bridge was constructed along the berth, leading to a new loading platform designed to accommodate loading and offloading of Panamax-class freighters carrying bulk liquids.

                        The project included the installation, placement, fitting, and welding of over 14,000 feet of stainless-steel piping and steam lines to reconnect the Kinder Morgan tank yard facility. New electrical services were installed for the Berth-1 control building, systems control center, and bridge lighting, along with a cable tray assembly for heat trace wiring on the bridge and platform. Over 14,000 feet of Heat Trace MI cable was added for both low- and high-temperature bulk fluid lines. Additional components included a new freshwater plumbing system for the tower and dredging approximately 250,000 cubic yards of the port’s turning basin to ensure safe ship departures. </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Wilmington, North Carolina</span>
                        <span class="detail"><strong>Completion:</strong> 2017</span>
                    </div>
                </div>
            </div>

            <!-- Capital Ford -->
            <div class="project-card commercial" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/capital1.jpg" alt="capital dealership" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">2</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Capital Ford</h2>
                    <p>
                        Burgess Group's electrical team was awarded the Capital Ford upfit project in Wilmington, NC, to remodel and update the Ford store. The project required careful coordination to meet customer requirements and comply with the manufacturer’s specifications. The scope included upgrading service equipment and building wiring systems, as well as installing new electrical components to support updated air handling systems for the showroom and service bay areas.
                    </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Wilmington, North Carolina</span>
                        <span class="detail"><strong>Completion:</strong> 2022</span>
                    </div>
                </div>
            </div>

            <!-- Special Operations Forces -->
            <div class="project-card government" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/bragg.jpg" alt="SOF sign" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">1</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Fort Bragg Special Operations Forces Tactics Facility, Phase 3</h2>
                    <p>
                        The SOF Phase 3 project, located in a classified high-security area at the Aberdeen Training Facility at Fort Bragg, North Carolina, involved the development of a comprehensive compound designed to support specialized mission operations for the United States Army. The project included extensive sitework infrastructure, facility communications, special systems, and power networks to interconnect multiple buildings. These facilities included an operations center, equipment and general storage buildings, troop training facilities, maintenance structures, motor pool operations, cargo deployment, and covered parking. The work incorporated advanced systems and infrastructure to meet the unique requirements of special mission operations. </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Aberdeen, North Carolina</span>
                        <span class="detail"><strong>Completion:</strong> 2022</span>
                    </div>
                </div>
            </div>

            <!-- Fort Eustis -->
            <div class="project-card government" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/eustis1.jpg" alt="eustis rail view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/eustis2.jpg" alt="eustis rail view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/eustis3.jpg" alt="eustis rail view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/eustis4.jpg" alt="eustis rail view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/eustis5.jpg" alt="eustis rail view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/eustis6.jpg" alt="eustis rail view" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">6</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Fort Eustis Rail Bridges 4 & 5</h2>
                    <p>
                        This project involved the repair and replacement of approximately 1,760 feet of railroad track between two stations, including bridge repairs and upgrades. The section spanned two tidal wetlands via existing timber trestles, which required full replacement. The work included aligning and replacing the track and modifying existing abutments to coordinate with trestle construction. Bridge 4, measuring 10 feet wide and 500 feet long, stood 8-9 feet above grade with a 0% slope, while Bridge 5, also 10 feet wide but 420 feet long, ranged from 8 to 18 feet above grade with a 1.38% slope. Both trestles were replaced within their original footprints, meeting a Cooper E-60 rating and an unfactored design load of 260 kips. Access to the wetlands was restricted, and all work was conducted from Harrison Road’s lane and shoulder or from the tops of the existing and new pile bents to minimize environmental impact. </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Newport News, Virginia</span>
                        <span class="detail"><strong>Completion:</strong> 2022</span>
                    </div>
                </div>
            </div>

            <!-- Nano Plant -->
            <div class="project-card industrial" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/nano1.jpg" alt="nano plant view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/nano2.jpg" alt="nano plant view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/nano3.jpg" alt="nano plant view" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">3</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Nano Plant Pump Variable Frequency Drive</h2>
                    <p>
                        Burgess Group was awarded the prime contract for the Nano Plant Pump Variable Frequency Drive (VFD) installation in Jacksonville, NC, tasked with upgrading the City’s Water Treatment Plant. The project involved the installation of four custom-built VFD units on a mezzanine above the water purification systems, requiring specialized rigging for precise placement. Supervisory Control and Data Acquisition (SCADA) controls were integrated to enable seamless onsite and remote system monitoring and control. The existing motor control centers (MCCs) were reconfigured to support the new power and control systems, ensuring optimal performance and reliability. </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Jacksonville, North Carolina</span>
                        <span class="detail"><strong>Completion:</strong> 2018</span>
                    </div>
                </div>
            </div>
            <!-- water tower -->
            <div class="project-card industrial" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/watertower1.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/watertower2.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/watertower3.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/watertower4.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/watertower5.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/watertower6.jpg" alt="water tower view" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">6</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Elevated Tank Post Treatment Aeration System</h2>
                    <p>
                        The Westbrook 2MGD Water Tower project in Wilmington, NC, involved the turnkey installation of an advanced aeration system designed to remove Trihalomethane (THM) byproducts from the stored and distributed water. The scope of work included installing a power wiring system to operate the tank's internal components and integrating the system controls for seamless on-site or remote operation and monitoring. The controls were further connected to the County's central monitoring and control headend equipment via the existing communications network, ensuring efficient system oversight and management.
                    </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Wilmington, North Carolina</span>
                        <span class="detail"><strong>Completion:</strong> 2018</span>
                    </div>
                </div>
            </div>
            <!-- Red Hill -->
            <div class="project-card main-card full-width government">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/hawaii1.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii2.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii3.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii4.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii5.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii6.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii7.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii8.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii9.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii10.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii11.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/hawaii12.jpg" alt="Hawaii view" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">12</span>
                    </div>
                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Red Hill Fueling Facility, Pearl Harbor</h2>
                    <p>Burgess Group completed a high-visibility project as an EPC teaming partner with the former VFI for the Office of the Secretary of Defense (Logistics & Material Readiness) at Fleet Industrial Supply Center (FISC) in Pearl Harbor, Hawaii.

                        The Red Hill complex, built between 1940 and 1943, consists of twenty 300,000-barrel underground storage tanks, three pipelines, and a pumping facility. The pipelines, located within a 2.7-mile-long underground tunnel, rest on approximately 300 supports and pass through over 20 bulkheads, each four feet thick. In addition to fuel service, the system supplies 30 million gallons of drinking water daily to Honolulu and surrounding areas, making uninterrupted operation vital.

                        Burgess Group's work involved three separate shutdowns and drain-ups of a critical 32-inch pipeline, each requiring precise scheduling to avoid impacting the readiness of the Pacific Fleet. VFI completed the engineering and design, including a comprehensive pipeline survey to identify corrosion-affected sections. Burgess provided all construction services, removing and replacing major sections of piping, pipe stands, and thrust blocks, as well as installing a new 28-degree bend to replace the original mitered section from the complex's initial construction.</p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Oahu, Hawaii</span>
                        <span class="detail"><strong>Completion:</strong> 2008</span>
                    </div>
                </div>
            </div>

            <!-- RDU  -->
            <div class="project-card project-group industrial" data-aos="fade-up">
                <!-- Main Project Card -->
                <div class="project-card main-card">
                    <div class="project-content">
                        <h2>Raleigh Durham International Airport</h2>
                        <p>Burgess Group played a pivotal role in the redevelopment of Raleigh-Durham International Airport's Terminal 2, contributing to every major phase of construction over nearly a decade. Starting in 2003 with the Taxiway D expansion, Burgess began an extensive process of replacing the entire hydrant fueling system and associated structures, managing demolition and installation of critical infrastructure. The team continued with early foundation work and structural upgrades, providing essential systems for the terminal's expansion.

                            During the Terminal C renovation and subsequent South Concourse expansion, Burgess demolished and replaced over 10,000 feet of pipeline, 60 fueling pits, and 10 concrete isolation valve vaults, all while maintaining pipeline operations with no more than 8 hours of downtime. The team also safely removed, recovered, and transported over 250,000 gallons of fuel without incident during defueling, refueling, and flushing operations.

                            As a result of the award for the hydrant fueling and structures project for the South Concourse section, Burgess achieved the unique distinction of being the only company to perform major contract work on every bid package awarded for the new terminal’s construction. This comprehensive involvement underscored Burgess Group’s exceptional expertise and commitment to the successful transformation of Terminal 2.</p>
                        <div class="project-details">
                            <span class="detail"><strong>Location:</strong> Morrisville, North Carolina</span>
                            <span class="detail"><strong>Completion:</strong> 2003</span>
                            <span class="detail"><strong>Value:</strong> $570 Million</span>
                        </div>
                    </div>
                </div>

                <!-- Taxiway -->
                <div class="sub-cards">
                    <div class="project-card sub-card">
                        <div class="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/airport1.jpg" alt="airport foundation 1" loading="lazy" decoding="async">
                                </div>
                            </div>

                            <div class="carousel-counter">
                                <span class="current">1</span>/<span class="total">7</span>
                            </div>

                            <button class="carousel-control prev" aria-label="Previous image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="carousel-control next" aria-label="Next image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="project-content">
                            <h3>Taxiway D Expansion – The Lane Construction Corporation</h3>
                            <p>During this phase of construction, Burgess Corporation demolished existing zone valves, valve vaults, pipeline and hydrant pits. Following substantial grading efforts by Lane, Burgess installed new valve vaults, hydrant pits, pipeline, trench drains, and underground electrical, concrete encased, duct banks.</p>
                        </div>
                    </div>
                    <!-- Early Foundations -->
                    <div class="project-card sub-card">
                        <div class="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/airport5.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport8.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport9.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport11.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport12.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport14.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport15.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport16.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport19.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport21.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport22.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport24.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/airport25.jpg" alt="airport foundation" loading="lazy" decoding="async">
                                </div>
                            </div>

                            <div class="carousel-counter">
                                <span class="current">1</span>/<span class="total">13</span>
                            </div>

                            <button class="carousel-control prev" aria-label="Previous image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="carousel-control next" aria-label="Next image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="project-content">
                            <h3>Early Foundations Work- Archer Western Contractors</h3>
                            <p>Following the Taxiway D extension, the RDU airport authority awarded the first phase of the Terminal C redevelopment project, focusing on infrastructure expansions and foundational upgrades. Burgess Corporation, selected by early foundations contractor Archer Western, handled the demolition and installation of the new hydrant fueling system and structures near the new terminal foundations. Additional work included concrete utility construction and water line extensions.</p>
                        </div>
                    </div>
                    <!-- Term C Reno/Expansion -->
                    <div class="project-card sub-card">
                        <div class="carousel">
                            <div class="carousel-inner">
                                <!-- photos -->
                            </div>

                            <div class="carousel-counter">
                                <span class="current">1</span>/<span class="total">1</span>
                            </div>

                            <button class="carousel-control prev" aria-label="Previous image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="carousel-control next" aria-label="Next image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="project-content">
                            <h3>Renovation and Expansion – Archer Western Contractors</h3>
                            <p>This project, the largest in the airport's history, was awarded in February 2006 and marked a transformative era for the region. It involved demolishing Terminal C and constructing the 920,000-square-foot Terminal 2 with over 30 boarding gates. Burgess Corporation was awarded all hydrant fueling work, including system removal, new pits, isolation valve vaults, and associated concrete and utility work. The airport authority accelerated the schedule, and Burgess, alongside Archer Western, successfully completed construction ahead of the original deadline.</p>
                        </div>
                    </div>

                    <!-- Concourse Expansion -->
                    <div class="project-card sub-card">
                        <div class="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/airport1.jpg" alt="airport foundation 1" loading="lazy" decoding="async">
                                </div>
                            </div>

                            <div class="carousel-counter">
                                <span class="current">1</span>/<span class="total">1</span>
                            </div>

                            <button class="carousel-control prev" aria-label="Previous image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="carousel-control next" aria-label="Next image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="project-content">
                            <h3>South Concourse Expansion- Archer Western Contractors</h3>
                            <p>Building on the successful efforts of Archer Western and its subcontractors, including the Burgess Team, the RDU airport authority approved a $140 million expansion to complete the demolition and replacement of the south concourse. This expanded scope required the removal and replacement of the remaining elements of the 1987 hydrant fueling loop to accommodate the terminal addition.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pendleton -->
            <div class="project-card government" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/sd1.jpg" alt="Pendleton view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd2.jpg" alt="Pendleton view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd3.jpg" alt="Pendleton view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd4.jpg" alt="Pendleton view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd5.jpg" alt="Pendleton view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd6.jpg" alt="Pendleton facility view 3" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd7.jpg" alt="Pendleton facility view 4" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd8.jpg" alt="Pendleton facility view 5" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd9.jpg" alt="Pendleton facility view 6" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd10.jpg" alt="Pendleton facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd11.jpg" alt="Pendleton facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd12.jpg" alt="Pendleton facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd13.jpg" alt="Pendleton facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd14.jpg" alt="Pendleton facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd15.jpg" alt="Pendleton facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/sd16.jpg" alt="Pendleton facility view 7" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">16</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Pipeline Repair MCAS, Camp Pendleton</h2>
                    <p>
                        Burgess Group was contracted to replace a failing hydrant fuel pipeline system at MCAS Pendleton, installing a new stainless steel hydrant loop and cathodic protection system adjacent to the existing pipeline. The project required abandoning the 1999 double-containment pipeline, which had developed leaks in both the fiberglass containment and stainless steel carrier pipes. This system, essential for aviation operations, was replaced while maintaining fueling capabilities and active flight operations.

                        The work involved removing and replacing runway pavement under a 12-inch active fuel apron, all while adhering to strict environmental controls. Collaboration with an environmental team was critical to mitigate contaminated soil and pavements while preserving the sensitive ecosystem restored by the State of California. Burgess Group completed the project without incident or service interruptions, delivering the work 112 days ahead of schedule.
                    </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Oceanside, California</span>
                        <span class="detail"><strong>Completion:</strong> 2005</span>
                    </div>
                </div>
            </div>

            <!-- Aguadilla Project -->
            <div class="project-card government" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/pr1.jpg" alt="Aguadilla Facility view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/pr2.jpg" alt="Aguadilla facility view 2" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/pr3.jpg" alt="Aguadilla facility view 3" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/pr4.jpg" alt="Aguadilla facility view 4" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/pr5.jpg" alt="Aguadilla facility view 5" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/pr6.jpg" alt="Aguadilla facility view 6" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/pr7.jpg" alt="Aguadilla facility view 7" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">7</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Fueling System Construction, USCG Air Station Borinquen</h2>
                    <p>Burgess Group was contracted to construct a new fueling facility at the US Coast Guard Station Borinquen in Aguadilla, Puerto Rico. The project included a fuel receipt, storage, and distribution system to support mission-critical “hot fueling” of aircraft used by multiple US agencies. Given the corrosive environment and the need for above-ground installation, a durable stainless steel fueling system was specified. Burgess Group handled every aspect of the project, mobilizing personnel, materials, and equipment to complete the work entirely with in-house employees, with third-party radiographic inspection as the only outsourced task.
                    </p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Aguadilla, Puerto Rico</span>
                        <span class="detail"><strong>Completion:</strong> 2000</span>
                    </div>
                </div>
            </div>

            <!-- Destin Project -->
            <div class="project-card government" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/destin1.jpg" alt="Destin facility view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin2.jpg" alt="Destin facility view 2" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin3.jpg" alt="Destin facility view 3" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin4.jpg" alt="Destin facility view 4" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin5.jpg" alt="Destin facility view 5" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin6.jpg" alt="Destin facility view 6" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin7.jpg" alt="Destin facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin8.jpg" alt="Destin facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin9.jpg" alt="Destin facility view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/destin10.jpg" alt="Destin facility view 7" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">10</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Facility & Pavement Construction, USCG Station Destin</h2>
                    <p>Burgess Group was selected as the prime contractor for a facility upgrade at the US Coast Guard Station Destin, addressing aging and depleted infrastructure. The project included replacing pavements, demolishing and expanding the boat ramps, and constructing a new support services building. Burgess demolished the existing concrete hardstand, boat ramp, and pilings, then installed new pavements, pilings, piling caps, and an expanded boat ramp. The new support services building was constructed with specialty non-corrosive coatings to ensure durability in the coastal environment.</p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Destin, Florida</span>
                        <span class="detail"><strong>Completion:</strong> 2002</span>
                    </div>
                </div>
            </div>

            <!-- Wright-Patterson Project -->
            <div class="project-card government" data-aos="fade-up">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/wrightpatterson1.jpg" alt="Wright Patterson view 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson2.jpg" alt="Wright Patterson view 2" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson3.jpg" alt="Wright Patterson view 3" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson4.jpg" alt="Wright Patterson view 4" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson5.jpg" alt="Wright Patterson view 5" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson6.jpg" alt="Wright Patterson view 6" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson7.jpg" alt="Wright Patterson view 7" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson8.jpg" alt="Wright Patterson view 3" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson9.jpg" alt="Wright Patterson view 3" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/wrightpatterson10.jpg" alt="Wright Patterson view 3" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <div class="carousel-counter">
                        <span class="current">1</span>/<span class="total">10</span>
                    </div>

                    <button class="carousel-control prev" aria-label="Previous image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="carousel-control next" aria-label="Next image">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="project-content">
                    <h2>Wright-Patterson Air Force Base West Ramp</h2>
                    <p>Burgess Group was contracted to install a new stainless steel hydrant fueling loop at Wright-Patterson Air Force Base to support fueling large-body aircraft. As part of the design/build reconstruction of the base's West Ramp, led by Kokosing Construction Company, the project included a new 3,000-foot by 520-foot concrete apron and fuel supply system. Burgess Group, selected as the hydrant fueling piping and concrete structures contractor, performed the work within Kokosing's accelerated schedule. The project was completed ahead of schedule with no impacts or delays to Kokosing or Air Force operations.</p>
                    <div class="project-details">
                        <span class="detail"><strong>Location:</strong> Fairborn, Ohio</span>
                        <span class="detail"><strong>Completion:</strong> 2001</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section id="cta">
        <div class="container">
            <h2 data-aos="fade-up">Ready to Start Your Project?</h2>
            <p data-aos="fade-up" data-aos-delay="50">
                Let's discuss how Burgess Group can bring expertise and excellence to your next construction project.
            </p>
            <a href="/opportunities.php#contact-form" class="button-solid" data-aos="fade-up" data-aos-delay="100">Contact Us</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize carousels
        document.querySelectorAll('.carousel').forEach(carousel => {
            let currentSlide = 0;
            const items = carousel.querySelectorAll('.carousel-item');
            const totalSlides = items.length;
            const prevBtn = carousel.querySelector('.prev');
            const nextBtn = carousel.querySelector('.next');
            const counter = carousel.querySelector('.carousel-counter');

            // Set initial counter
            if (counter) {
                const currentCounter = counter.querySelector('.current');
                const totalCounter = counter.querySelector('.total');
                if (currentCounter && totalCounter) {
                    currentCounter.textContent = '1';
                    totalCounter.textContent = totalSlides.toString();
                }
            }

            function goToSlide(n) {
                // Remove active class from current slide
                items[currentSlide].classList.remove('active');

                // Update current slide
                currentSlide = (n + totalSlides) % totalSlides;

                // Add active class to new slide
                items[currentSlide].classList.add('active');

                // Update counter
                if (counter) {
                    const currentCounter = counter.querySelector('.current');
                    if (currentCounter) {
                        currentCounter.textContent = (currentSlide + 1).toString();
                    }
                }
            }

            function nextSlide() {
                goToSlide(currentSlide + 1);
            }

            function previousSlide() {
                goToSlide(currentSlide - 1);
            }

            // Event Listeners
            prevBtn.addEventListener('click', previousSlide);
            nextBtn.addEventListener('click', nextSlide);

            // Keyboard navigation
            carousel.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') previousSlide();
                if (e.key === 'ArrowRight') nextSlide();
            });

            // Touch support
            let touchStartX = 0;
            let touchEndX = 0;

            carousel.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            }, false);

            carousel.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                if (touchStartX - touchEndX > 50) {
                    nextSlide();
                } else if (touchEndX - touchStartX > 50) {
                    previousSlide();
                }
            }, false);
        });

        // Filter code remains the same
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projects = document.querySelectorAll('#projects > .container > .project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                // Get the filter value
                const filter = btn.dataset.filter;

                // Show/hide projects based on filter
                projects.forEach(project => {
                    if (filter === 'all' || project.classList.contains(filter)) {
                        project.style.display = '';
                        // If the project has AOS animation, refresh it
                        if (project.hasAttribute('data-aos')) {
                            project.setAttribute('data-aos-delay', '0');
                            AOS.refresh();
                        }
                    } else {
                        project.style.display = 'none';
                    }
                });
            });
        });
    });
</script>