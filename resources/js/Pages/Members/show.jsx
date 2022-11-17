import React from "react";
import AssobetonLayout from "@/Layouts/AssobetonLayout";
import { Link } from "@inertiajs/inertia-react";

const show = ({ member }) => {
    return (
        <AssobetonLayout>
            <div className=" flex flex-wrap ">
                <Link className=" basis-full" href="/members">
                    Tutti i soci
                </Link>

                <div className="basis-full flex ">
                    <img
                        className="w-80"
                        src={member.logo}
                        alt={member.title}
                    />
                    <div className=" flex flex-col">
                        <div className="font-semibold text-3xl leading-10 ">
                            {member.title}
                        </div>
                        <div className="bg-[#B7B7B7]  ">{member.group}</div>
                        <div>{member.email}</div>
                        <div>{member.phone}</div>
                        <div>{member.address}</div>
                        <div>{member.website}</div>
                    </div>
                </div>
                <div dangerouslySetInnerHTML={{ __html: member.description }} />
                {member.carousel.map((image) => {
                    <img src={image} alt={member.title} />;
                })}
            </div>
        </AssobetonLayout>
    );
};

export default show;
