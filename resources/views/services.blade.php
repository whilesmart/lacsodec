<x-layouts.app>
    <div class="services-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{__('services.Services')}}
            @endslot
        @endcomponent

        <section>
            <div class="con">
                <div class="services-grid">
                <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal1" class="service">S1: <br> {{__('services.CSO Directories')}}</a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal2" class="service">
                        S2: <br>
                        {{__('services.Experts Directory')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal3" class="service">
                        S3: <br>
                        {{__('services.Human Resource directory')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal4" class="service">
                        S4: <br>
                        {{__('services.Financial Management Support')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal5" class="service">
                        S5: <br>
                        {{__('services.Legal Advisory & support')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal6" class="service">
                        S6: <br>
                        {{__('services.The CSO Information and Data Centre (physical/online)')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal7" class="service">
                        S7: <br>
                        {{__('services.Continuous Capacity Building')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal8" class="service">
                        S8: <br>
                        {{__('services.ICT4D and Biz Incubation Hub')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal9" class="service">
                        S9: <br>
                        {{__('services.Small Grant Scheme')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal10" class="service">
                        S10: <br>
                        {{__('services.Meals')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal11" class="service">
                        S11: <br>
                        {{__('services.CSO Media Centre')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal12" class="service">
                        S12: <br>
                        {{__('services.CSO Annual Conference')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal13" class="service">
                        S13: <br>
                        {{__('services.Strategic networking & twining')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal14" class="service">
                        S14: <br>
                        {{__('services.Advocacy and lobby for Donor Process streamlining')}}
                    </a>
                    <a href="#" data-bs-toggle="modal"
                                data-bs-target="#serviceModal15" class="service">
                        S15: <br>
                        {{__('services.Framework for Consultation and dialogue (physical/online)')}}
                    </a>
                </div>
            </div>

            <div class="modal fade" id="serviceModal1" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.CSO Directories')}}</h3>
                                <p>{{__('services.Establish a very detailed directory of CSO in Cameroon ranked on the basis of an institutional/operational micro assessment conducted on each organization using a mutually agreed assessment tool. The center then works to accompany the CSO to improve their institutional and operational capacities and hence migrate from one category to the other.  The directory is made available online/offline and updated yearly by the Data department of the center')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal2" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Experts Directory')}}</h3>
                                <p>{{__('services.A directory of experts in different domains is established and made available online/offline at the center to provide timely and quality technical support to the civil society.  The directory is updated yearly.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal3" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Human Resource directory')}}</h3>
                                <p>{{__('services.To address the human resource challenges faced by the civil society resulting from high staff turnover and low practical skills among graduates, this service of LACSODEC will focus on a structured professional internship for university graduates aimed at preparing them to the labor pool from where CSO can draw quality human capital. This directory is available offline/online and updated regularly')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal4" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Financial Management Support')}}</h3>
                                <p>{{__('services.Accommodate at the center a qualified audit department charged with the development of tools and training modules based on the standard accounting standards (OHADA) and use the same to train and accompany civil society and youth’s startups to establish compliant financial management systems. The department will therefore conduct yearly audits and certify the accounts of participating CSO and thereby increase their eligibility to access resources at national, regional and international levels.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal5" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Legal Advisory & support')}}</h3>
                                <p>{{__('services.Accommodate a legal advisory department charged with the responsibility to research, analyze, simplify, share and train CSO on available legal frameworks (National, regional and international) guiding their general operations as well as sector-specific reference source documents. The Legal department also has the responsibility to establish a national and regional referral pathway of legal experts to provide timely legal counsel to CSO as well as trigger the network to protect CSO actors in cases of harassment related to their work.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal6" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.The CSO Information and Data Centre (physical/online)')}}</h3>
                                <p>{{__('services.The information and data center (library/archive) will collect and keep resourceful publications good for CSO reference for knowledge and/or consultation during programs/project formulation. The department conducts ongoing assessments, research and publications that are then used to inform local, national, regional and international policy formulation and for evidence-based advocacy for positive change. The center provides secured data backup service that can be used by CSO to prevent data loss that is frequent among CSOs.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal7" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Continuous Capacity Building')}}</h3>
                                <p>{{__('services.A key aspect of the LACSODEC is to develop and deliver content and mentorship in specific areas of institutional and operational capacity of the civil society organizations using a hybrid of physical workshops and high technologies such as video conferencing and distant learning. Peer mentorship will be encouraged and supported to allow best practices to be shared across the civil society via placement programs horizontally and vertically across the nation, continent and globally.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal8" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.ICT4D and Biz Incubation Hub')}}</h3>
                                <p>{{__('services.To meet up with the fast technology world, drawing from the ever-increasing number of youth tech enthusiasts, this department will provide the infrastructure needed to support the development of technologies that respond to the needs of the civil society in particular but also those of businesses, local/national institutions and governments in general. The work of this department will support the digitalization of the LACSODEC as a whole. This service will therefore research, develop and acquire technologies and make these available and accessible to the civil society to improve institutional and operational performance including teleconferencing facilities that can aid holding of meetings and networking remotely and regularly as compared to current cost intensive systems.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal9" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Small Grant Scheme')}}</h3>
                                <p>{{__('services.As a means of promoting and testing acquired knowledge and skills, LUKMEF is introducing the LUKMEF small grant program aimed at providing small grants($1000 - $5000) to small and middle incomes organizations to implement impactful institutional strengthening actions and small human development projects in their respective areas of expertise as a way of validating their institutional and operational capacity toward accessing bigger donor funds.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal10" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Meals')}}</h3>
                                <p>{{__('services.The center will pay particular attention to the Monitoring, Evaluation and Learning system by developing tools, training modules and delivering same to CSO as well accompanying them towards effective use of tools and collection of qualitative and quantitative data that is used to inform their programs/project formulation and evidence-based advocacy for change.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal11" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.CSO Media Centre')}}</h3>
                                <p>{{__('services.As a strategy to bring visibility and to take its content to beneficiaries in a cost-effective way, the center is designed to harbor a development communication Media center (TV, Radio, Print and online) that has been tested in Buea for the last 3 years to be effective')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal12" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.CSO Annual Conference')}}</h3>
                                <p>{{__('services.Support the yearly organization of a civil society review conference aimed at conducting a global appraisal of the performance of CSO and the operating environment for CSO')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal13" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Strategic networking & twining')}}</h3>
                                <p>{{__('services.While LACSODEC is not a network, the center encourages, facilitates and supports north-south and south-south bilateral and multilateral networking, twining and collaboration between CSOs and relevant national and international agencies likely to add value to CSO institutional and operational capacity.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal14" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Advocacy and lobby for Donor Process streamlining')}}</h3>
                                <p>{{__('services.Based on evidence and available accompanying mechanisms, engage with development partners, relevant state agencies and corporate bodies to streamline funding eligibility criteria to accommodate low, middle income and start-up organizations')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="serviceModal15" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h3>{{__('services.Framework for Consultation and dialogue (physical/online)')}}</h3>
                                <p>{{__('services.Promote public-private sector dialogue and partnerships for local and national development through a hybrid of physical and technologies to bridge the resource gap that limited such processes in the past.')}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

    </div>
</x-layouts.app>
