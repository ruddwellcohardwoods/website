<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected $woodTypes = [
        [
            'name' => 'Ash',
            'other_names' => 'Bowwood, Hedge Apple, Horse Apple, Mock Orange, Osage Apple-tree, Wild Orange, Yellow-wood',
            'description' => 'Ash is known for its light-colored, smooth, and straight-grained wood. Its strength and resilience make it a popular choice for a variety of applications.',
            'appearance' => 'Light-colored with an attractive grain pattern, featuring pale cream to light brown heartwood and nearly white sapwood.',
            'physical_properties' => 'Ash is strong, tough, and flexible, with excellent shock resistance. It is relatively hard and durable.',
            'working_properties' => 'Easy to work with using both hand and machine tools. It glues, stains, and finishes well, making it a versatile wood.',
            'uses' => 'Commonly used in furniture, flooring, cabinetry, tool handles, and sports equipment such as baseball bats.',
            'availability' => 'Readily available across North America, with moderate pricing.',
            'images' => ['portfolio1.png', 'portfolio2.png', 'portfolio3.png']
        ],
        [
            'name' => 'Alder',
            'other_names' => 'Red Alder, Western Alder',
            'description' => 'Alder is a popular domestic hardwood known for its uniform color and workability, commonly used in furniture and cabinetry.',
            'appearance' => 'Light tan to reddish-brown color, which darkens over time. The grain is straight with a fine, even texture.',
            'physical_properties' => 'A moderately hard wood that is easy to work with. It is less dense than other hardwoods like Maple or Oak.',
            'working_properties' => 'Very easy to work with both hand and machine tools. Alder glues, sands, and finishes beautifully, taking stains and paints very well.',
            'uses' => 'Ideal for cabinetry, furniture, doors, and decorative woodwork. Often used for interior millwork and musical instruments.',
            'availability' => 'Readily available, especially in the Western United States, with moderate to affordable pricing.',
            'images' => ['portfolio2.png', 'portfolio3.png', 'portfolio1.png']
        ],
        [
            'name' => 'Aspen',
            'other_names' => 'Popple, White Poplar',
            'description' => 'Aspen is a light-colored hardwood known for its softness and workability. It’s commonly used for utility purposes.',
            'appearance' => 'Pale white to light yellow wood with a fine, even texture and straight grain.',
            'physical_properties' => 'Aspen is relatively soft, lightweight, and has low density. It has moderate strength and poor resistance to decay.',
            'working_properties' => 'Aspen is easy to work with and machines well. It holds paint and finishes without blotching.',
            'uses' => 'Commonly used for plywood, crates, furniture frames, and toys. It’s also popular in wood turning and crafting.',
            'availability' => 'Readily available across North America at an affordable price.',
            'images' => ['portfolio1.png', 'portfolio3.png', 'portfolio2.png']
        ],
        [
            'name' => 'Aromatic Cedar',
            'other_names' => 'Eastern Red Cedar, Pencil Cedar',
            'description' => 'Aromatic Cedar is prized for its fragrant wood and natural insect-repellent properties.',
            'appearance' => 'Reddish-brown heartwood with pale yellow sapwood. The grain is straight, and it has a fine, even texture.',
            'physical_properties' => 'A soft, lightweight wood with good rot and insect resistance. It’s durable in outdoor settings and emits a distinct aromatic fragrance.',
            'working_properties' => 'Easy to work with hand or machine tools. It holds finishes well, though it is typically left unfinished to retain its aromatic qualities.',
            'uses' => 'Commonly used for lining closets, chests, and drawers. Also used for fencing, outdoor furniture, and small specialty items.',
            'availability' => 'Widely available, particularly in the Eastern United States, and moderately priced.',
            'images' => ['portfolio3.png', 'portfolio2.png', 'portfolio1.png']
        ],
        [
            'name' => 'Basswood',
            'other_names' => 'American Linden, Limewood',
            'description' => 'Basswood is a soft, light hardwood often used for carving and utility purposes. It’s easy to work with and relatively affordable.',
            'appearance' => 'Light cream to pale white, with little to no grain pattern. It has a fine, uniform texture.',
            'physical_properties' => 'Basswood is soft, lightweight, and has poor resistance to decay. It is not particularly strong but is ideal for detailed carving work.',
            'working_properties' => 'Very easy to carve and work with using both hand and machine tools. It holds paint and finishes well.',
            'uses' => 'Popular for wood carving, model building, and crafting. Also used in musical instruments and small furniture.',
            'availability' => 'Plentiful in North America, especially in the Eastern and Midwestern regions.',
            'images' => ['portfolio1.png', 'portfolio2.png', 'portfolio3.png']
        ],
        [
            'name' => 'Birch',
            'other_names' => 'Yellow Birch, White Birch',
            'description' => 'Birch is a dense hardwood with a fine grain and light color. It is a common choice for cabinetry and furniture.',
            'appearance' => 'Light yellow to reddish-brown, with a fine, uniform texture. The grain is typically straight but may have slight waves.',
            'physical_properties' => 'Birch is strong, heavy, and durable. It is resistant to shock and has good wear resistance.',
            'working_properties' => 'Works well with hand and machine tools, but can dull cutting edges quickly due to its hardness. Birch takes finishes well, though it may blotch without a conditioner.',
            'uses' => 'Used in cabinetry, flooring, furniture, and plywood. It is also commonly used for wooden toys and specialty items.',
            'availability' => 'Widely available and moderately priced, though figured or higher-grade birch may be more expensive.',
            'images' => ['portfolio2.png', 'portfolio3.png', 'portfolio1.png']
        ],
        [
            'name' => 'Beech',
            'other_names' => 'American Beech (Fagus grandifolia)',
            'description' => 'Beech is a hardwood that is known for its strength, wear resistance, and uniform texture. It is commonly used in flooring, furniture, and tool handles due to its fine, straight grain.',
            'appearance' => 'Beech is light in color, ranging from pale cream to a reddish-brown hue. The wood’s grain is typically straight, with a fine, even texture.',
            'physical_properties' => 'It is hard, strong, and very heavy, with excellent shock resistance. Beech is non-durable when exposed to the elements and is susceptible to insect attacks, making it more suitable for indoor projects.',
            'working_properties' => 'Beech works well with both hand and machine tools. It responds well to steam bending, and it can be stained and finished easily. However, the wood is prone to warping and movement with humidity changes.',
            'uses' => 'Commonly used in flooring, furniture, cabinetry, and for making tool handles. It is also used in veneer and plywood production.',
            'availability' => 'Beech is abundantly available in North America, making it a cost-effective choice for various woodworking projects.',
            'images' => ['portfolio2.png', 'portfolio3.png', 'portfolio1.png']
        ],
        [
            'name' => 'Cherry',
            'other_names' => 'Black Cherry, American Cherry',
            'description' => 'Cherry is a highly sought-after hardwood known for its rich color and fine grain. It is prized in fine furniture and cabinetry.',
            'appearance' => 'Reddish-brown that deepens with age, with a fine, even grain and a smooth surface.',
            'physical_properties' => 'Cherry is moderately hard and strong, with good resistance to shock and wear. It has excellent stability.',
            'working_properties' => 'Cherry is easy to machine, glue, and finish. It stains and polishes to a rich, deep color, making it ideal for high-end woodworking.',
            'uses' => 'High-end furniture, cabinetry, paneling, and millwork. Often used in musical instruments and veneers.',
            'availability' => 'Available throughout North America, though pricing can be higher due to its desirability.',
            'images' => ['portfolio3.png', 'portfolio2.png', 'portfolio1.png']
        ],
        [
            'name' => 'Walnut',
            'other_names' => 'Black Walnut, American Walnut',
            'description' => 'Walnut is a dark, rich hardwood prized for its beauty and durability. It is a premium wood used in fine furniture.',
            'appearance' => 'Dark brown to purplish-black heartwood, often with lighter sapwood. The grain is typically straight, though it may have figure.',
            'physical_properties' => 'Walnut is a tough, hard wood with moderate density and good shock resistance. It has excellent stability.',
            'working_properties' => 'Works well with hand and machine tools, though care is needed to avoid tear-out. It finishes beautifully, accepting a variety of stains and finishes.',
            'uses' => 'High-end furniture, cabinetry, gunstocks, and musical instruments. It is also commonly used for veneers and specialty items.',
            'availability' => 'Widely available, though more expensive than many other domestic hardwoods due to its popularity.',
            'images' => ['portfolio1.png', 'portfolio2.png', 'portfolio3.png']
        ],
        [
            'name' => 'White Oak',
            'other_names' => 'Quercus alba, Stave Oak',
            'description' => 'White Oak is a strong, durable hardwood with a light to medium brown color, commonly used in furniture and flooring.',
            'appearance' => 'Light to medium brown heartwood, often with a slight olive tint. The grain is straight and coarse, with large pores.',
            'physical_properties' => 'Strong, hard, and durable, White Oak is resistant to moisture and rot, making it suitable for outdoor use.',
            'working_properties' => 'White Oak is easy to work with, though it can dull tools due to its hardness. It finishes well and has excellent gluing properties.',
            'uses' => 'Furniture, flooring, barrels, and boatbuilding. Also used for cabinetry and outdoor structures.',
            'availability' => '',
            'images' => ['portfolio2.png', 'portfolio3.png', 'portfolio1.png']
        ],
        [
            'name' => 'Hickory',
            'other_names' => 'Shagbark Hickory, Shellbark Hickory',
            'description' => 'Hickory is known for its incredible strength, hardness, and toughness. It is among the hardest and strongest woods native to North America.',
            'appearance' => 'Pale to reddish-brown heartwood with a straight to wavy grain. The sapwood is white to cream-colored.',
            'physical_properties' => 'Extremely strong and heavy, with high shock resistance. Hickory is stiff, hard, and highly durable.',
            'working_properties' => 'Can be difficult to machine due to its density but finishes well. It can be challenging to glue and stain evenly.',
            'uses' => 'Used for tool handles, flooring, cabinetry, and sporting goods, such as baseball bats.',
            'availability' => 'Widely available, moderately priced for a hardwood of its strength.',
            'images' => ['portfolio3.png', 'portfolio1.png', 'portfolio2.png']
        ],
        [
            'name' => 'Maple',
            'other_names' => 'Hard Maple, Sugar Maple, Soft Maple',
            'description' => 'Maple is prized for its smooth grain and durability, widely used for furniture and flooring.',
            'appearance' => 'Creamy white sapwood and reddish-brown heartwood. Hard Maple is denser, while Soft Maple has a lighter tone.',
            'physical_properties' => 'Very strong, heavy, and hard. Maple is resilient and has high wear resistance.',
            'working_properties' => 'Maple is challenging to work with but takes finishes well. It can burn easily, requiring sharp tools.',
            'uses' => 'Commonly used in flooring, cabinets, furniture, and cutting boards. Often used for musical instruments.',
            'availability' => 'Readily available, with Hard Maple being more expensive than Soft Maple.',
            'images' => ['portfolio2.png', 'portfolio1.png', 'portfolio3.png']
        ],
        [
            'name' => 'Red Oak',
            'other_names' => 'Northern Red Oak, Southern Red Oak',
            'description' => 'Red Oak is a popular hardwood for furniture and flooring due to its strength and attractive grain.',
            'appearance' => 'Light to medium reddish-brown, with a coarse, straight grain.',
            'physical_properties' => 'Strong, hard, and heavy, with high shock resistance. Red Oak has a porous structure, making it more susceptible to moisture.',
            'working_properties' => 'Easy to work with, machines well, and takes finishes beautifully.',
            'uses' => 'Furniture, flooring, cabinetry, and millwork. Often used in architectural woodwork and trim.',
            'availability' => 'Widely available and moderately priced.',
            'images' => ['portfolio1.png', 'portfolio3.png', 'portfolio2.png']
        ],
        [
            'name' => 'Poplar',
            'other_names' => 'Tulip Poplar, Yellow Poplar',
            'description' => 'Poplar is a versatile hardwood with a light color and low cost, often used as a paint-grade wood.',
            'appearance' => 'Light cream to yellowish-brown, with a straight, uniform grain. The heartwood is usually darker than the sapwood.',
            'physical_properties' => 'Soft, lightweight, and low in density. Poplar is not particularly strong or durable.',
            'working_properties' => 'Easy to work with hand and machine tools. It glues, stains, and finishes well.',
            'uses' => 'Primarily used for paint-grade applications, such as cabinetry, furniture frames, and millwork.',
            'availability' => 'Widely available and one of the most affordable hardwoods.',
            'images' => ['portfolio2.png', 'portfolio1.png', 'portfolio3.png']
        ],
        [
            'name' => 'Pine',
            'other_names' => 'Northern Pine, Soft Pine, Eastern White Pine',
            'description' => 'Eastern White Pine is a soft, versatile wood with a light, creamy color, often used in construction and cabinetry.',
            'appearance' => 'Light brown heartwood with a reddish tint, and pale white to yellow sapwood. The grain is straight with a fine, even texture.',
            'physical_properties' => 'Light, soft, and easy to work with. Moderate decay resistance and good stability.',
            'working_properties' => 'Very easy to work with both hand and machine tools. It sands, stains, and paints well.',
            'uses' => 'Used in construction, millwork, furniture, and cabinetry. It’s also popular for boatbuilding and carving.',
            'availability' => 'Widely available at moderate prices, especially in the Eastern U.S.',
            'images' => ['portfolio1.png', 'portfolio2.png', 'portfolio3.png']
        ],
        [
            'name' => 'Sapele',
            'other_names' => 'Entandrophragma cylindricum, Sapele Mahogany',
            'description' => 'Sapele is a hardwood from tropical Africa, often used as a substitute for Mahogany due to its similar appearance and properties. It has gained popularity in high-end woodworking due to its beautiful grain and versatility.',
            'appearance' => 'Sapele has a rich, reddish-brown color that tends to darken over time. It is known for its interlocking grain, which gives it a distinctive figure, such as ribbon stripes, especially when quarter-sawn. The wood can also exhibit a range of other figured grain patterns like quilted, mottled, and fiddleback.',
            'physical_properties' => 'Sapele is a dense and durable wood, with excellent strength and stability. It is moderately resistant to decay and rot, making it suitable for indoor and outdoor use. The interlocking grain can make it harder to work with but adds to its aesthetic appeal.',
            'working_properties' => 'Sapele can be more difficult to work with than other woods due to its interlocking grain, which can cause tear-out during planing or machining. However, it turns, glues, and finishes well. It holds paint, stains, and polishes beautifully, which makes it a popular choice for high-end furniture and musical instruments.',
            'uses' => 'Sapele is commonly used in furniture, cabinetry, paneling, and flooring. It is also popular in the production of doors, windows, and veneers. The wood is often used in musical instruments, particularly for guitars, due to its tonal qualities.',
            'availability' => 'Sapele is relatively available, although it is more expensive than many domestic hardwoods. It is frequently used as a sustainable alternative to Mahogany due to its abundance in West and Central Africa.',
            'images' => ['portfolio1.png', 'portfolio2.png', 'portfolio3.png']
        ],
    ];
    public function index()
    {
        // Define the wood types names for the UI
        $woodTypesNames = [
            ['Ash', 'Alder', 'Aspen', 'Aromatic Cedar', ],
            ['Beech', 'Birch', 'Pine', 'Cherry'],
            ['Hickory', 'Maple', 'Sapele', 'Poplar' ],
            ['White Oak', 'Basswood', 'Red Oak', 'Walnut'],
        ];

        // Pass the data to the Blade template
        return view('pages.portfolio', ['woodTypesNames' => $woodTypesNames]);
    }

    public function show($woodName)
    {
        // Find the wood details by name
        $wood = collect($this->woodTypes)->firstWhere('name', $woodName);

        // Return wood details as JSON
        if ($wood) {
            return response()->json($wood);
        } else {
            return response()->json(['error' => 'Wood not found'], 404);
        }
    }
}
