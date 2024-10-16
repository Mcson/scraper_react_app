import { Head } from '@inertiajs/react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faGaugeHigh } from '@fortawesome/free-solid-svg-icons';
import PrimaryLayout from '@/Layouts/PrimaryLayout';

export default function Dashboard() {
    return (
        <PrimaryLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                  <FontAwesomeIcon icon={faGaugeHigh} className="text-primary-500 mr-2" />   Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            You're logged in!
                        </div>
                    </div>
                </div>
            </div>
        </PrimaryLayout>
    );
}
