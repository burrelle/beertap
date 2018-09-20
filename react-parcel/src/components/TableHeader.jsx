import React from 'react';

const TableHeader = () => {
    return(
        <tr className="bg-grey-lighter uppercase text-grey-darkest text-sm">
            <th className="p-6" />
            <th>Beer</th>
            <th>Brewery</th>
            <th>Price</th>
            <th>ABV</th>
            <th>IBU</th>
            <th>Style</th>
            <th />
        </tr>
    );
};

export default TableHeader;
