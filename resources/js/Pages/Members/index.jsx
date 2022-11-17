import { Link } from "@inertiajs/inertia-react";
import React from "react";

const index = ({ members }) => {
    return (
        <div>
            {members.map((member) => (
                <div key={member.id}>
                    <div>{member.title}</div>
                    <Link href={`/members/${member.slug}`}>Show</Link>
                </div>
            ))}
        </div>
    );
};

export default index;
