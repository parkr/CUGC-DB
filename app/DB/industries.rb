#!/usr/bin/env ruby -wKU

puts "INSERT INTO industries (name) VALUES"

File.open("#{File.dirname(__FILE__)}/industries.txt", "r") do |f|
	while (industry = f.gets)
		puts "('#{industry.strip}'),"
	end
end