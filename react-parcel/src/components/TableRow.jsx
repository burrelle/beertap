import React from 'react';
import classNames from 'classnames'

const TableRow = props => {
    const btnClass = classNames({
        'p-4 border-l-4 border-green-dark': props.volume <= 30,
        'p-4 border-l-4 border-yellow-dark': props.volume > 30 && props.volume <= 60,
        'p-4 border-l-4 border-red-dark': props.volume > 60
    });
    return (
        <tr className="border-b-2">
            <td className={btnClass}>
                <img
                    className="w-8 h-8 rounded-full"
                    src="https://via.placeholder.com/400x400"
                />
            </td>
            <td>
                <p className="font-semibold">{props.beer.name}</p>
                <p className="text-sm text-grey-dark font-thin">
                    {props.style}
                </p>
            </td>
            <td>
                <p className="font-semibold">{props.brewery}</p>
                <p className="text-sm text-grey-dark font-thin">
                    {props.city},{props.state}
                </p>
            </td>
            <td>
                <p className="inline font-thin text-xs text-sm text-grey-dark">$</p>
                <p className="inline font-semibold">{props.beer.price}</p>
            </td>
            <td>
                <p className="inline font-semibold text-sm">{props.beer.abv}</p>
                <p className="inline font-thin text-xs text-grey-dark">%</p>
            </td>
            <td className="font-semibold text-sm">{props.beer.ibu}</td>
            <td className="font-semibold text-sm">
                {props.glass}
            </td>
            <td>
                <svg class="-mt-4 h-4 w-6 fill-current text-grey-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
            </td>
        </tr>
    );
};

export default TableRow;
